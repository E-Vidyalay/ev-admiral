<?php 
	class SubjectTopicsController extends AppController{
		public $uses=array('SubjectTopic','Standard','Subject');

		function index(){
			$this->layout="ev_admin";

			 $this->set('subjects',$this->Subject->find('all'));

			$a=$this->Subject->find('list',array('fields'=>array('id','display_name')));
			$this->set('subjects', $a);

			$topic=$this->SubjectTopic->find('list', array('fields'=>array('subject_topic_id','topic_name')));
			$this->set('topics',$topic);


		}

		function insert(){
			$this->layout="ev_admin";
			$a=array();
			$a=$this->Subject->find('list',array('fields'=>array('id','display_name')));
			$this->set('subjects', $a);
			
			if($this->request->is('post')){
				pr($this->data);
				if($this->SubjectTopic->save($this->data))
				{
					$this->Session->setFlash('Topic added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'SubjectTopics','action'=>'index'));
				}
			}
		}

		function delete(){
			
		}
}
?>