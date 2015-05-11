<?php
class QuestionbanksController extends Appcontroller{

	public function index(){
		$a=array();
		$a=$this->Questionbank->find("all");
		this->set('questions',$a);
		this->layout='ev-admin';
	}

	public function 
}
?>