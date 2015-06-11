<?php
	class ImagesController extends AppController{
		public function insert(){
			$this->layout="ev_admin";
			if($this->request->is('post')){
	            $arr=array(); 

	            $path=$this->data['Image']['path'];
	            for($i=0;$i<count($path);$i++){
	                $arr[$i]['path']['name']=$path[$i]['name'];
	                $arr[$i]['path']['type']=$path[$i]['type'];
	                $arr[$i]['path']['tmp_name']=$path[$i]['tmp_name'];
	                $arr[$i]['path']['error']=$path[$i]['error'];
	                $arr[$i]['path']['size']=$path[$i]['size'];

	            }
				
				$this->Image->saveMany($arr);
				$this->Session->setFlash('Images added','default',array('class'=>'alert alert-success'),'success');
	        	$this->redirect(array('action' => 'index'));
			}
		}
		public function index(){
			$this->layout='ev_admin';
        	$this->set('Images',$this->Image->find('all'));
		}
		public function delete($id=NULL){
	        $this->Image->delete($id);
	        $this->Session->setFlash('Image has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
	        $this->redirect(array('action' => 'index'));
	    }
	}
?>