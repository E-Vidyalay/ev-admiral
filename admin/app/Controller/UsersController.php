<?php
	class UsersController extends AppController{
		//Model that controller needs
		//$uses=array('User');

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
		public function index(){
			$this->layout='ev_admin';
		}
		public function login(){
			$this->layout='login';
			if($this->Session->check('Auth.User')){
				$this->redirect(array('controller'=>'users','action'=>'index'));
			}

			if($this->request->is('post')){
				if($this->Auth->login()){
					$this->Session->setFlash('Logged in successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect($this->Auth->redirectUrl());
				}
				else{
					$this->Session->setFlash('Sorry invalid username or password','default',array('class'=>'alert alert-danger'),'error');
				}
			}
		}

		public function logout(){
			if($this->Auth->logout()){
				$this->Session->setFlash('Logged out successfully','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'users','action'=>'login'));
			}
			else{
				die("error");
			}
		}
	}
?>