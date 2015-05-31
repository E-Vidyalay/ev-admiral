<?php 

class LinksController extends AppController{

	var $uses = array('Link','Topic');

	public function index(){
		$this->layout="ev_admin";
		$l=$this->Link->find('all');
		$this->set('linkID',$l);
		}

	public function insert(){
		$this->layout="ev_admin";
		$sb=$this->Topic->find('list',array('fields'=>array('id','name')));
		$this->set('topic',$sb);
		if($this->request->is('post')){
			$data=$this->data;
			if($this->Link->save($data))
			{	
				$this->Session->setFlash('Link has been successfully added','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Links','action'=>'index'));

			}
			else{
				$this->Session->setFlash('Link has not been added','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('action'=>'index'));
			}
		}

	}

	public function delete($id = NULL){
			pr($id);
			$this->Link->delete($id);
			$this->Session->setFlash('Link has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

	public function update($id=NULL){
		$this->layout="ev_admin";
		$sb=$this->Topic->find('list',array('fields'=>array('id','name')));
		$this->set('topic',$sb);
		if(empty($this->data)){
			$this->data=$this->Link->findById($id);
		}
		else{
			if($this->Link->save($this->data))
			{
				$this->Session->setFlash('Link has been successfully updated','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('action'=>'index'));
			}
			else{
				$this->Session->setFlash('Link has not been updated','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('action'=>'index'));
			}
		}
		
	}
}