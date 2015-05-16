<?php
	class AdminsController extends AppController{
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
			$this->layout='ev_admin';
			if($this->Auth->logout()){
				$this->Session->setFlash('Logged out successfully','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'admins','action'=>'login'));
			}
			else{
				die("error");
			}
		}
	}
?>