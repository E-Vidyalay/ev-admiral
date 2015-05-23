<?php 
	class SubjectTopicsController extends AppController{
		public $uses=array('SubjectTopic','Subject');

		function index(){
			$this->layout="ev_admin";
			$topic=$this->SubjectTopic->find('all');
			$this->set('topics',$topic);
		}

		function insert(){
			$this->layout="ev_admin";
			$a=array();
			$a=$this->Subject->find('list',array('fields'=>array('id','display_name')));
			$this->set('subjects', $a);
			
			if($this->request->is('post')){
				if($this->SubjectTopic->save($this->data))
				{
					$this->Session->setFlash('Topic added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'SubjectTopics','action'=>'index'));
				}
			}
		}

		function delete($id = NULL){
			$this->SubjectTopic->delete($id);
			$this->Session->setFlash('Subject has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL, $display_name = NULL){
			$this->layout="ev_admin";
			$a=$this->Subject->findById($id);
			$this->set('subjects', $a);
			$this->set('dName',$display_name);

			if(empty($this->data)){
				$this->data= $this->SubjectTopic->findById($id);
			}
			else{
				$data=$this->data;
				//pr($data);
				if($this->SubjectTopic->save($data))
				{
					$this->Session->setFlash('Topic has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
				else{
					$this->Session->setFlash('Topic has not been edited','default',array('class'=>'alert alert-error'),'error');
					$this->redirect(array('action'=>'update'));
				}
			}
		}
}
?>