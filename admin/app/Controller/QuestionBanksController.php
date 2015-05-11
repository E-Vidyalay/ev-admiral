<?php
class QuestionBanksController extends AppController{

	public function index(){
		$a=array();
		$a=$this->QuestionBank->find("all");
		pr($a);
		$this->set('questions', $a);
		$this->layout='ev_admin';
	}
	
}
?>