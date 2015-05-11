<?php
class QuestionBanksController extends AppController{

	public function index(){
		$a=array();
		$a=$this->QuestionBank->find("all");
		$this->set('questions',$a);
		$this->layout='ev-admin';
	}

	
}
?>