<?php
class QuestionBanksController extends AppController{

	public function index(){
		$a=array();
		$a=$this->QuestionBank->find("all");
<<<<<<< HEAD
		$this->set('questions',$a);
		$this->layout='ev-admin';
	}

=======
		pr($a);
		$this->set('questions', $a);
		$this->layout='ev_admin';
	}
>>>>>>> 0f494a323a48db352cb85473d485d00c55721da7
	
}
?>