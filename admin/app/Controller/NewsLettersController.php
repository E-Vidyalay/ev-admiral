<?php
	class NewsLettersController extends AppController{
		public $uses=array('User','NewsLetter');
		public function index(){
			$this->layout='ev_admin';
			$this->set('news',$this->NewsLetter->find('all'));
		}
		public function add(){
			$this->layout='ev_question';
			$this->set('user_id',$this->Auth->user('id'));
			if($this->request->is('post')){
				if($this->NewsLetter->save($this->data)){
					$this->Session->setFlash('News added successfully','default',array('class'=>'alert alert-success'),'success');
					/*
					var $name=$this->User->find('all',array('conditions'=>array('User.subscribe'=>1)));
					for ($name as $name)
					{
						$Email = new CakeEmail('gmail');
						$Email->from(array('lakhan.samani@actonate.com' => 'ev-admiral'))
						    ->to($name)
						    ->subject('EV Newsletter')
						    ->send($this->data);
					}
					 */
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