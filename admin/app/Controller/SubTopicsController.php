<?php 
	class SubTopicsController extends AppController{
		var $helpers=array('Ajax');
		var $components=array('RequestHandler');

		public $uses = array('SubTopic','Subject','SubjectTopic');

		function index(){
			$this->layout="ev_admin";
			$sub=$this->SubTopic->find('all');
			$this->set('subtopics',$sub);
		}

		function insert(){
			$this->layout="ev_admin";
			$subs=$this->Subject->find('list',array('fields'=>array('id','display_name')));
			$this->set('subjects',$subs);
			pr($subs);
		}

		function ajax_subjects(){
			$this->set('topics',$this->SubjectTopic->find('all'));
			$this->render('Subtopics/insert');
		}
	}
?>