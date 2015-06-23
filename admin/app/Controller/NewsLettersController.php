<?php
	App::uses('CakeEmail', 'Network/Email');
	class NewsLettersController extends AppController{
		public $uses=array('User','NewsLetter','Admin');
		public function index(){
			$this->layout='ev_admin';
			$this->set('news',$this->NewsLetter->find('all'));
		}
		public function add(){
			$this->layout='ev_question';
			$this->set('user_id',$this->Auth->user('id'));
			if($this->request->is('post')){
				if($this->NewsLetter->save($this->data)){
				$writer=$this->Admin->findById($this->data['NewsLetter']['user_id']);
				$body='<br/>
						<div class="row">
							<div class="col-lg-8">
								<div class="panel panel-default">
									<div class="panel-heading">
									<h5>'.$this->data['NewsLetter']['title'].'</h5>
									</div>
									<div class="panel-body">'.$this->data['NewsLetter']['content'].'</div>
									<div class="panel-heading">
									<h5>By-'.$writer['Admin']['username'].'</h5>
									</div>
								</div>
							</div>
						</div>
						Click <a href="http://ev.learnlabs.in/Newsletters/sharenews/'.$this->NewsLetter->getLastInsertId().'">here</a> to see the Newsletter.';
					$subcribers=$this->User->find('all',array('conditions'=>array('User.subscribe'=>1)));
					// foreach($subcribers as $name)
					// {
					// 	$Email = new CakeEmail();
					// 	$Email->from(array('newsletter@ev.learnlabs.in' => 'ઈ-વિદ્યાલય Team'))
					// 	    ->to($name['User']['username'])
					// 	    ->subject('EV Newsletter')
					// 		->viewVars(array('value' => $name['User']))
					// 	    ->emailFormat('html')
					// 	    ->send($body);
					// }
					$this->Session->setFlash('News added and sent to subscribed users','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'NewsLetters','action'=>'index'));
				}
				else{
					$this->Session->setFlash('Sorry there was error','default',array('class'=>'alert alert-danger'),'error');
				}
			}
		}

		public function delete($id=NULL){
			$this->NewsLetter->delete($id);
			$this->Session->setFlash('News has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('controller'=>'NewsLetters','action' => 'index'));
		}
		public function update($id="NULL"){
			$this->layout='ev_question';
			$this->set('user_id',$this->Auth->user('id'));
			if(empty($this->data)){
				$this->data= $this->NewsLetter->findById($id);
			}
			else{
				if($this->NewsLetter->save($this->data)){
					$this->Session->setFlash('News has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'NewsLetters','action' => 'index'));
				}
			}
		}
		public function view_news($id){
			$this->layout="ev_admin";
			$this->set('news',$this->NewsLetter->findById($id));
		}
	}
?>