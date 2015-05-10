<?php 

	class SubjectsController extends AppController{

		public function index()
		{
                    $this->layout='ev_admin';
                    pr($this->set('subjects',$this->Subject->find('all')));
		}

		public function insert()
		{
			$this->layout='ev_admin';
			$data = $this->Subject->Standard->find('list', array('fields' => array('standard')));
			$this->set('stand', $data);
			$userId = $this->Auth->user('id');
			$this->set('user',$userId);
			if($this->request->is('post'))
			{
				pr($this->data);
				if($this->Subject->save($this->data))
				{
					$this->Session->setFlash('Subject added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'subjects','action'=>'index'));
				}
			}
		}

		function delete($id = NULL){
			$this->Subject->delete($id);
			$this->Session->setFlash('Subject has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			if(empty($this->data)){
				$this->data= $this->Subject->findById($id);
			}
			else{
				if($this->Subject->save($this->data)){
					$this->Session->setFlash('Subject has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

	}
?>