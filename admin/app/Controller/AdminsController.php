<?php
	class AdminsController extends AppController{
		public $uses=array('Admin','AdminType','Article','Ebook','Link','User','Topic','SubTopic','InformationPost','LiteraturePost','HobbylobbyPost','InformationComment','HobbylobbyComment','LiteratureComment');
		public function index(){
			$this->layout='ev_admin';
			$totalinfopost=$this->InformationPost->find('count');
			$totallitpost=$this->LiteraturePost->find('count');
			$totalhbpost=$this->HobbylobbyPost->find('count');
			$totalposts=$totalinfopost+$totallitpost+$totalhbpost;
			$this->set('totalposts',$totalposts);
			$totalhbcomment=$this->HobbylobbyComment->find('count');
			$totalinfocomment=$this->InformationComment->find('count');
			$totallitcomment=$this->LiteratureComment->find('count');
			$totalcomments=$totalhbcomment+$totalinfocomment+$totallitcomment;
			$this->set('totalcomments',$totalcomments);
		}
		public function users(){
			$this->layout='ev_admin';
			$users=$this->Admin->find('all');
			$this->set('users',$users);
		}
		function generate_password( $length = 8 ) {
	       $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	       $password = substr( str_shuffle( $chars ), 0, $length );
	       return $password;
	    }
		public function forgot_password(){
			$this->layout='login';
			if($this->request->is('post')){
				$data=$this->request->data;
				$findUser = $this->Admin->findByusername($data['Admin']['username']);
				$findEmail= $this->Admin->findByEmail($data['Admin']['username']);
				if($findUser!=NULL){
					$autopassword=$this->generate_password(8);
					pr($autopassword);
					$findUser['Admin']['password']=$autopassword;
					// pr($findUser);
					if($this->Admin->save($findUser)){
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>Your new Password</h3>
						// 			<hr/>
						// 			Username: '.$findUser['Admin']['username'].'
						// 			<br/>
						// 			New Password: '.$autopassword.'
						// 			<br/>
						// 			Login with your new Password and Change it.
						// 			<hr/>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($findUser['Admin']['email'])
						//     ->subject('Request of New Password')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Password is sent to your registered email address.','default',array('class'=>'alert alert-success'),'success');
					}
				}
				else if($findEmail!=NULL){
					$autopassword=$this->generate_password(8);
					pr($autopassword);
					$findEmail['Admin']['password']=$autopassword;
					// pr($findEmail);
					if($this->Admin->save($findEmail)){
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>Your new Password</h3>
						// 			<hr/>
						// 			Username: '.$findEmail['Admin']['username'].'
						// 			<br/>
						// 			New Password: '.$autopassword.'
						// 			<br/>
						// 			Login with your new Password and Change it.
						// 			<hr/>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($findEmail['Admin']['email'])
						//     ->subject('Request of New Password')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Password is sent to your registered email address.','default',array('class'=>'alert alert-success'),'success');
					}
				}

				else{
					$this->Session->setFlash('Username or Email not registerd on our Portal.', 'default', array('class' => 'alert alert-danger') , 'error');
				}
			}
		}
		public function add(){
			$this->layout='ev_admin';
			$utypes=$this->AdminType->find('list',array('fields'=>array('id','name')));
			$this->set('utypes',$utypes);
			if($this->request->is('post')){
				$user = $this->request->data;
				$findUser = $this->Admin->findByusername($user['Admin']['username']);
				$findEmail = $this->Admin->findByEmail($user['Admin']['email']);
				if($findUser != null){
                    $this->Session->setFlash('Looks like username is already taken.', 'default', array('class' => 'alert alert-danger') , 'error');
                }
                else if($findEmail != null){
                	$this->Session->setFlash('Looks like email is already registerd.', 'default', array('class' => 'alert alert-danger') , 'error');
                }
                else{
                	if($this->Admin->save($user)){
                		$this->Session->setFlash('Admin has been Added successfully','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'admins','action' => 'users'));
                	}
                }
			}	
		}
		public function delete($id = NULL){
			$this->Admin->delete($id);
			$this->Session->setFlash('Admin has been removed successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('controller'=>'admins','action' => 'users'));
		}
		public function profile($id=NULL){
			$this->layout='ev_admin';
			$this->set('Uid',$id);
			if(empty($this->data)){
				$this->data=$this->Admin->findById($id);
			}
			else{
				$data=$this->data;
				if($this->Admin->save($data))
				{
					if($this->data['Admin']['id']==AuthComponent::User('id')){
						$this->Session->write('Auth.User.name', $this->data['Admin']['name']);
						$this->Session->write('Auth.User.email', $this->data['Admin']['email']);
						$this->Session->setFlash('User Details has been successfully updated','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'admins','action'=>'profile',$id));
					}
				}
				else{
					$this->Session->setFlash('User Details has not been updated','default',array('class'=>'alert alert-danger'),'error');
					$this->redirect(array('controller'=>'admins','action'=>'profile',$id));
				}
			}
		}
		public function changepassword($id=NULL){
			$this->layout='ev_admin';
			if($this->request->is('post')){
				$useradmin=$this->Admin->findById($id);
				$stored=$useradmin['Admin']['password'];
				$oldHash = AuthComponent::password($this->data['Admin']['oldpassword']);
				$correct = $stored == $oldHash;
				$data=array();
				$data['Admin']['id']=$this->data['Admin']['id'];
				$data['Admin']['password']=$this->data['Admin']['newpassword'];
				if($correct){
					if($this->Admin->save($data))
					{
						$this->Session->setFlash('Password has been successfully updated','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'admins','action'=>'profile',$id));
					}
					else{
						$this->Session->setFlash('Password has not been updated','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'admins','action'=>'profile',$id));
					}	
				}
				else{
					$this->Session->setFlash('Wrong Old Password','default',array('class'=>'alert alert-danger'),'error');
					$this->redirect(array('controller'=>'admins','action'=>'profile',$id));
				}
				
			}
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
		public function approval_page($id=NULL,$cid=NULL){
			$this->layout="ev_question";
			$data=$this->Article->findById($id);
			$user=$this->User->findById($cid);
			$this->set('page',$data);
			$this->set('user',$user);
			if($this->request->is('post')){
				if($this->data['approval']=='Approve'){
					$pdata=$this->Article->findById($this->data['Admin']['page_id']);
					$pdata['Article']['allow']=1;
					if($this->Article->save($pdata)){
						// $contributor=$this->User->findById($this->data['Admin']['user_id']);
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>'.$pdata['Article']['title'].'</h3>
						// 			<hr/>
						// 			'.$pdata['Article']['content'].'
						// 			<br/>
						// 			<hr/>
						// 			<h3>Response</h3>
						// 			<hr/>
						// 			'.$this->data['Admin']['comment'].'
						// 			<br/>
						// 			<hr/>
						// 			<h5>By-'.$contributor['User']['username'].'</h5>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($contributor['User']['username'])
						//     ->subject('EV Article Contributor')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Page is Approved and mail is sent to the Contributor','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'Admins','action' => 'contribute'));
					}
				}
				else if($this->data['approval']=='Deny'){
					$pdata=$this->Article->findById($this->data['Admin']['page_id']);
					$pdata['Article']['allow']=2;
					if($this->Article->save($pdata)){
						// $contributor=$this->User->findById($this->data['Admin']['user_id']);
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>'.$pdata['Article']['title'].'</h3>
						// 			<hr/>
						// 			'.$pdata['Article']['content'].'
						// 			<br/>
						// 			<hr/>
						// 			<h3>Response</h3>
						// 			<hr/>
						// 			'.$this->data['Admin']['comment'].'
						// 			<br/>
						// 			<hr/>
						// 			<h5>By-'.$contributor['User']['username'].'</h5>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($contributor['User']['username'])
						//     ->subject('EV Article Contributor')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Page is Not Approved and mail is sent to the Contributor','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'Admins','action' => 'contribute'));
					}
				}
			}
		}
		public function approval_ebook($id=NULL,$cid=NULL){
			$this->layout="ev_question";
			$data=$this->Ebook->findById($id);
			$this->set('book',$data);
			$user=$this->User->findById($cid);
			$this->set('user',$user);
			if($this->request->is('post')){
				if($this->data['approval']=='Approve'){
					$pdata=$this->Ebook->findById($this->data['Admin']['book_id']);
					$pdata['Ebook']['allow']=1;
					if($this->Ebook->save($pdata)){
						// $contributor=$this->User->findById($this->data['Admin']['user_id']);
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>'.$pdata['Ebook']['title'].'</h3>
						// 			<hr/>
						// 			'.$pdata['Ebook']['description'].'
						//			Click here to view book: <a target="_blank" href="'.$this->webroot.'files/ebook/path/'.$pdata['Ebook']['id'].'/'.$pdata['Ebook']['path'].'" class="btn-sm btn btn-info hidden-xs">View book</a>
						// 			<br/>
						// 			<hr/>
						// 			<h3>Response</h3>
						// 			<hr/>
						// 			'.$this->data['Admin']['comment'].'
						// 			<br/>
						// 			<hr/>
						// 			<h5>By-'.$contributor['User']['username'].'</h5>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($contributor['User']['username'])
						//     ->subject('EV Ebook Contributor')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Ebook is Approved and mail is sent to the Contributor','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'Admins','action' => 'contribute_ebook'));
					}
				}
				else if($this->data['approval']=='Deny'){
					$pdata=$this->Ebook->findById($this->data['Admin']['book_id']);
					$pdata['Ebook']['allow']=2;
					if($this->Ebook->save($pdata)){
						// $contributor=$this->User->findById($this->data['Admin']['user_id']);
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>'.$pdata['Ebook']['title'].'</h3>
						// 			<hr/>
						// 			'.$pdata['Ebook']['description'].'
						//			Click here to view book: <a target="_blank" href="'.$this->webroot.'files/ebook/path/'.$pdata['Ebook']['id'].'/'.$pdata['Ebook']['path'].'" class="btn-sm btn btn-info hidden-xs">View book</a>
						// 			<hr/>
						// 			<h3>Response</h3>
						// 			<hr/>
						// 			'.$this->data['Admin']['comment'].'
						// 			<br/>
						// 			<hr/>
						// 			<h5>By-'.$contributor['User']['username'].'</h5>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($contributor['User']['username'])
						//     ->subject('EV Ebook Contributor')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Ebook is Not Approved and mail is sent to the Conributor','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'Admins','action' => 'contribute_ebook'));
					}
				}	
			}
		}
		public function approval_link($id=NULL,$cid=NULL){
			$this->layout="ev_question";
			$data=$this->Link->findById($id);
			$this->set('link',$data);
			$top=$this->Topic->find('all');
			$this->set('topics',$top);
			$sub=$this->SubTopic->find('all');
			$this->set('subtop',$sub);
			$user=$this->User->findById($cid);
			$this->set('user',$user);
			if($this->request->is('post')){

				if($this->data['approval']=='Approve'){
					$pdata=$this->Link->findById($this->data['Admin']['link_id']);
					$pdata['Link']['allow']=1;
					if($this->Link->save($pdata)){
						// $contributor=$this->User->findById($this->data['Admin']['user_id']);
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>'.$pdata['Link']['link_title'].'</h3>
						// 			<hr/>
						// 			Link URL: '.$pdata['Link']['link_url'].'
						// 			<br/>
						// 			<hr/>
						// 			<h3>Response</h3>
						// 			<hr/>
						// 			'.$this->data['Admin']['comment'].'
						// 			<br/>
						// 			<hr/>
						// 			<h5>By-'.$contributor['User']['username'].'</h5>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($contributor['User']['username'])
						//     ->subject('EV Link Contributor')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Link is Approved and mail is sent to the Contributor','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'Admins','action' => 'contribute_link'));
					}
				}
				else if($this->data['approval']=='Deny'){
					$pdata=$this->Link->findById($this->data['Admin']['link_id']);
					$pdata['Link']['allow']=2;
					if($this->Link->save($pdata)){
						// $contributor=$this->User->findById($this->data['Admin']['user_id']);
						// $body='<br/>
						// <div class="row">
						// 	<div class="col-lg-8">
						// 		<div class="panel panel-default">
						// 			<div class="panel-heading">
						// 			<h3>'.$pdata['Link']['link_title'].'</h3>
						// 			<hr/>
						// 			Link URL: '.$pdata['Link']['link_url'].'
						// 			<hr/>
						// 			<h3>Response</h3>
						// 			<hr/>
						// 			'.$this->data['Admin']['comment'].'
						// 			<br/>
						// 			<hr/>
						// 			<h5>By-'.$contributor['User']['username'].'</h5>
						// 			</div>
						// 			<br/>
						// 		</div>
						// 	</div>
						// </div>';
						// $Email = new CakeEmail();
						// $Email->from(array('noreply@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
						//     ->to($contributor['User']['username'])
						//     ->subject('EV Link Contributor')
						//     ->template('default')
						//     ->emailFormat('html')
						//     ->send($body);
						$this->Session->setFlash('Link is Not Approved and mail is sent to the Conributor','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'Admins','action' => 'contribute_link'));
					}
				}	
			}
		}
	}
?>