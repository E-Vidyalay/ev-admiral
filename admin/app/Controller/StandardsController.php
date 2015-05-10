<?php 
	class StandardsController extends AppController{

		function insert(){
			$this->layout='ev_admin';
			$a=array();
			$a=$this->Standard->find('all');
			//pr($a);
			$this->set('data',$a);
		}

		function delete($id = NULL){
			$this->Standard->delete($id);
			$this->Session->setFlash('Standard has been deleted successfully');
			$this->redirect(array('action' => 'index', $data['Standard']['id'], NULL, 'Are you sure you want to delete this standard?'));
		}

		function update($id = NULL){
			if(empty($this->data)){
				$this->data= $this->Standard->read(NULL, $id);
			}
			else{
				if($this->Standard->save($this->data)){
					$this->Session->setFlash('Standard has been successfully edited',);
					$this->redirect(array('action'=>'index'));
				}
			}

		}

		function index(){

		}
	}
?>