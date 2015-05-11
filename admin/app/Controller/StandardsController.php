<?php 

	class StandardsController extends AppController{
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'index');
			$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
			// Basic setup
			$this->Auth->authenticate = array('Form');
			// Pass settings in
			$this->Auth->authenticate = array(
				'Form' => array('userModel' => 'User')
			);
			$this->Auth->allow('login','forgot_password','update_password');
		}
		public function index()
		{
			$this->set('standards',$this->Standard->find('all'));
			$this->layout='ev_admin';
		}

		public function insert()
		{
			$this->layout='ev_admin';
			if($this->request->is('post'))
			{
				pr($this->data);
				if($this->Standard->save($this->data))
				{
					$this->Session->setFlash('Standard added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'standards','action'=>'index'));
				}
			}
		}

		function delete($id = NULL){
			$this->Standard->delete($id);
			$this->Session->setFlash('Standard has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			if(empty($this->data)){
				$this->data= $this->Standard->findById($id);
			}
			else{
				if($this->Standard->save($this->data)){
					$this->Session->setFlash('Standard has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

	}
?>