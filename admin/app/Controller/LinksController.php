<?php 

class LinksController extends AppController{

	var $uses = array('Link','SubTopic','Subject','SubjectTopic','Standard');

	public function index(){
		$this->layout="ev_admin";
		$l=$this->Link->find('all');
		$this->set('linkID',$l);
		}

	public function insert(){
		$this->layout="ev_admin";
		$sb=$this->SubTopic->find('list',array('fields'=>array('id','tags')));
		$this->set('sb',$sb);
		if($this->request->is('post')){
			$data=$this->data;
			if($this->Link->save($data))
			{	
				$this->Session->setFlash('Link has been successfully added','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Links','action'=>'index'));

			}
			else{
				$this->Session->setFlash('Link has not been added','default',array('class'=>'alert alert-error'),'error');
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
		$sb=$this->SubTopic->find('list',array('fields'=>array('id','tags')));
		$this->set('sb',$sb);
		if(empty($this->data)){
			$this->data=$this->Link->findById($id);
		}
		else{
			if($this->Link->save($data))
			{
				$this->Session->setFlash('Link has been successfully edited','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('action'=>'index'));
			}
			else{
				$this->Session->setFlash('Link has not been edited','default',array('class'=>'alert alert-error'),'error');
				$this->redirect(array('action'=>'update'));
			}
		}
		
	}
}