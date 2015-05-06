<?php
	class UsersController extends AppController{
		public function beforeFilter() {
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
	
		
		public function login(){
			
			$this->layout='login';
			$this->set('title','Santmegh Education | Login');
			if($this->Session->check('Auth.User')){
				$this->redirect(array('action' => 'index'));		
			}
			
			// if we get the post information, try to authenticate
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->Session->setFlash('Successfully logged in','default',array('class'=>'alert alert-success'),'success');
					$this->redirect($this->Auth->redirectUrl());
					
				} else {
					$this->Session->setFlash('Invalid username or password','default',array('class'=>'alert alert-danger'),'error');
				}
			} 
		}
		 public function logout(){
	        if($this->Auth->logout()){
	        	$this->Session->setFlash('Successfully Logged out of the system','default',array('class'=>'alert alert-success'),'success');
	            $this->redirect(array('controller'=>'users','action'=>'login'));
	        }
	        else{
	            die('Sorry incorrect.');
	        }
	    }
		public function index(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Home');
				$this->loadModel('Test');
				$this->loadModel('TestStudentMapping');
				$this->set('today_test',$this->Test->find('all',array('conditions'=>array('date'=>date('Y-m-d')))));
				$this->set('students',$this->TestStudentMapping->find('all',array('conditions'=>array('Test.date'=>date('Y-m-d')),'order'=>array('Test.date DESC'))));
					//'conditions'=>array('Test.date'=>date('Y-m-d'))
					//array(order'=>array())
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function forgot_password(){
			$this->layout='forgot_password';
			$this->set('title','Santmegh Education | Forgot Password');

			if($this->request->is('post')){
				$user=$this->User->find('first',array('conditions'=>array('user.email'=>$this->data['User']['email'])));
				
				$users=$this->User->find('all');
				$f=0;
				foreach ($users as $st) {
					if($this->data['User']['email']==$st['User']['email']){
						$f=1;
					}
					
				}
				if($f==1){
						
						$Email = new CakeEmail('gmail');
						$Email->from(array('lakhan.samani@actonate.com' => 'Santmegh Education'))
						    ->to('lakhan.samani@actonate.com')//$data['Student']['email']
						    ->subject('Forgot Password | User')
						    ->send('Please set your new password using the link the given bellow
							http://localhost/santmegh-computer-education/users/update_password/'.$user['User']['id']);
						$this->Session->setFlash('Password reset link sent to your mail','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'users','action'=>'login'));	
				}
				else{
						$this->Session->setFlash('No such email address found','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'users','action'=>'login'));
				}
			}
		}
		public function update_password($id=null){
			$this->layout='forgot_password';
			$this->set('title','Santmegh Education | Forgot password');
			$this->set('updated',$id);
			if($this->request->is('post')){
				if($this->User->save($this->data)){
					$this->Session->setFlash('Password updated','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'users','action'=>'login'));	
				}
				else{
					$this->Session->setFlash('Sorry password not updated try again',array('class'=>'alert alert-danger'),'error');
					$this->redirect(array('controller'=>'users','action'=>'login'));	
				}
			}
		}
		public function change_pass(){
			$this->layout='santmegh_main';
				$this->set('title','Change Password');
				$this->set('user_id',$this->Auth->user('id'));
			if($this->Auth->user('name')=='admin'){

				if($this->request->is('post')){
					if($this->User->save($this->data)){
						$this->Session->setFlash('Password updated Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'users','action'=>'index'));
					}
					else{
						$this->Session->setFlash('Password not updated please try again!','default',array('class'=>'alert alert-success'),'success');
						//$this->redirect(array('controller'=>'students','action'=>'index_student'));
					}
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
	}
?>