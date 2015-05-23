<?php 

class FilesController extends AppController{

	var $uses = array('File','Subject','Standard');
	function insert(){
		$this->layout="ev_admin";
		$sb=$this->Subject->find('list',array('fields'=>array('id','display_name')));
		$this->set('sb',$sb);
		//$this->set('sub_topic_id',$id);
		// $this->set('topic_name',$topic_name);
		// $this->set('sub_name',$display_name);
		//pr($topic_name);
		//pr($display_name);
		//pr($id);
				if($this->request->is('post')){
					
					$a=array(); 
					//pr($this->data);
					//$main=$this->data['File'];
					$path=$this->data['File']['files'];
					$subId=$this->data['File']['subtopic_id'];
					$fileDesc=$this->data['File']['file_desc'];
					$uuser=$this->Auth->user('id');
					//pr($main);
					for($i=0;$i<count($path);$i++){
					$a[$i]['file']['name']=$path[$i]['name'];
					$a[$i]['file']['type']=$path[$i]['type'];
					$a[$i]['file']['tmp_name']=$path[$i]['tmp_name'];
					$a[$i]['file']['error']=$path[$i]['error'];
					$a[$i]['file']['size']=$path[$i]['size'];
					$a[$i]['file_type']=$path[$i]['type'];
					$a[$i]['subtopic_id']=$subId;
					$a[$i]['uploaded_by']=$uuser;
					$a[$i]['file_desc']=$fileDesc;
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

	function index($id = NULL,$topic_name=NULL){
		$this->layout="ev_admin";
		$t=$this->SubjectTopic->find('all');
		$this->set('topics',$t);
		$l=$this->SubTopic->find('list',array('fields'=>array('id','subtopic_name'),'conditions'=>array('SubTopic.id'=>$id)));
		$f=$this->File->find('all',array('condition'=>array('File.subtopic_id'=>$id)));
			pr($f);
			$this->set('subtopic',$l);
			$this->set('all_file',$f);

			//$this->set('dName',$display_name);
			$this->set('topicnames',$topic_name);


			

	}

}