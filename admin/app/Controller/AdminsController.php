<?php
	class AdminsController extends AppController{
		public $uses=array('Article','Ebook','Link');
		public function index(){
			$this->layout='ev_admin';
		}
		public function login(){
			$this->layout='login';
			if($this->Session->check('Auth.User')){
				$this->redirect(array('controller'=>'admins','action'=>'index'));
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
		public function contribute(){
			$this->layout="ev_admin";
			$articles = $this->Article->find('all',array('conditions'=>array('allow'=>0)),array('order'=>array('Article.title')));
	        $this->set('articles', $articles);
		}
		public function contribute_ebook(){
			$this->layout="ev_admin";
			$l=$this->Ebook->find('all',array('conditions'=>array('allow'=>0)));
			$this->set('books',$l);
		}
		public function contribute_link(){
			$this->layout="ev_admin";
			$l=$this->Link->find('all',array('conditions'=>array('allow'=>0)));
			$this->set('linkID',$l);
		}
		public function allow_page($id=NULL){
			$data=$this->Article->findById($id);
			$data['Article']['allow']=1;
			if($this->Article->save($data)){
				$this->Session->setFlash('Page is Approved','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Admins','action' => 'contribute'));
			}
			else{
				$this->Session->setFlash('Sorry some problem occur','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('controller'=>'Admins','action' => 'contribute'));
			}
		}
		public function allow_ebook($id=NULL){
			$data=$this->Ebook->findById($id);
			$data['Ebook']['allow']=1;
			if($this->Ebook->save($data)){
				$this->Session->setFlash('Ebook is Approved','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Admins','action' => 'contribute_ebook'));
			}
			else{
				$this->Session->setFlash('Sorry some problem occur','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('controller'=>'Admins','action' => 'contribute_ebook'));
			}
		}
		public function allow_link($id=NULL){
			$data=$this->Link->findById($id);
			$data['Link']['allow']=1;
			if($this->Link->save($data)){
				$this->Session->setFlash('Link is Approved','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Admins','action' => 'contribute_link'));
			}
			else{
				$this->Session->setFlash('Sorry some problem occur','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('controller'=>'Admins','action' => 'contribute_link'));
			}
		}
	}
?>