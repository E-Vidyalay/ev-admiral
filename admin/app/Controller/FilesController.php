<?php 

class FilesController extends AppController{

	var $uses = array('File','Subject','Standard');
	function insert(){
		$this->layout="ev_admin";
		$sb=$this->Subject->find('list',array('fields'=>array('id','display_name')));
		$this->set('sb',$sb);
				if($this->request->is('post')){
					
					$a=array(); 
					$path=$this->data['File']['files'];
					$subId=$this->data['File']['subject_id'];
					$fileDesc=$this->data['File']['tags'];
					$uuser=$this->Auth->user('id');
					for($i=0;$i<count($path);$i++){
					$a[$i]['file']['name']=$path[$i]['name'];
					$a[$i]['file']['type']=$path[$i]['type'];
					$a[$i]['file']['tmp_name']=$path[$i]['tmp_name'];
					$a[$i]['file']['error']=$path[$i]['error'];
					$a[$i]['file']['size']=$path[$i]['size'];
					$a[$i]['file_type']=$path[$i]['type'];
					$a[$i]['subject_id']=$subId;
					$a[$i]['uploaded_by']=$uuser;
					$a[$i]['tags']=$fileDesc;
					//$this->File->saveMany($a)
					
					}
					//pr($a);
					//pr($this->request->data['File']);
					
						
					if($this->File->saveMany($a)){
					
					$this->Session->setFlash('File/s has been successfully added','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'Files','action'=>'index',$subId));

				}
				else{
					$this->Session->setFlash('File/s has not been added','default',array('class'=>'alert alert-error'),'error');
					$this->redirect(array('action'=>'add'));
				}
			}

	}

	function index(){
		$this->layout="ev_admin";
		$f=$this->File->find('all');
		$this->set('all_file',$f);
	}

	public function delete($id = NULL){
			// pr($id);
			// $uploadedFile=$this->File->findById($id);
			$file = new Folder(WWW_ROOT . 'files/file/file/'.$id, false, 0777);
			if($file->delete()) {
				$this->File->delete($id);
   				$this->Session->setFlash('File has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			}
			$this->redirect(array('action' => 'index'));
		}

}