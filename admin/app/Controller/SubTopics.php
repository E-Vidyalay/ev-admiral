<?php 
	class SubTopics extends AppController(){
		public $uses = array('SubTopic','Subject','SubjectTopic');

		function index(){
			$this->layout="ev_admin";
			$sub=$this->SubTopic->finc('all');
			$this->set('subtopics',$sub);
		}

		function insert(){
			$this->layout="ev_admin";
			$subs=$this->Subject->find('list',array('fields'=>array('id','display_name')));
			$this->set('subjects',$subs);
		}
	}
?>