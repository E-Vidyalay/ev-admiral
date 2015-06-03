<?php 
App::uses('SetSubject','View/Helper');
	class SubjectsController extends AppController{
		public $uses=array('User','Subject');
		public function index()
		{
                    $this->layout='ev_admin';
                    $this->set('subjects',$this->Subject->find('all'));
		}

		public function insert()
		{
			$this->layout='ev_admin';
			$userId = $this->Auth->user('id');
			$this->set('user',$userId);
			if($this->request->is('post'))
			{
				$data=$this->data;
				if($this->Subject->save($data))
				{
					$this->Session->setFlash('Subject added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'subjects','action'=>'index'));
				}
			}
		}

		public function delete($id = NULL){
			$this->Subject->delete($id);
			$this->Session->setFlash('Subject has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		public function update($id = NULL){
			$this->layout='ev_admin';
			$userId = $this->Auth->user('id');
			$this->set('user',$userId);
			if(empty($this->data)){
				$this->data= $this->Subject->findById($id);
			}
			else{
				$data=$this->data;
				if($this->Subject->save($data)){
					$this->Session->setFlash('Subject has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

		public function insert_topic(){
			$this->layout="ev_admin";
			$data=$this->data->Standard->find('list',array('fields' => array('id','sttandard')));
			$this->set('stand',$data);
			$userId=$this->Auth->user('id');
			$this->set('user',$userId);
			if($this->request->is('post')){
				$data=$this->data;
			}
		}

	}
?>