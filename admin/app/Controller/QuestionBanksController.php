<?php
class QuestionBanksController extends AppController{
	public $uses=array('QuestionBank','Subject');
	public function index(){
		$a=array();
		$a=$this->QuestionBank->find("all");
		$this->set('questions',$a);
		$this->layout='ev_admin';
	}

	public function insert(){
				$this->layout='ev_admin';
				//$this->set('user_id',$this->Auth->user('id'));
				if($this->request->is('post')){
					$data=$this->data;
					$correct_ans=array();
					for($i=1;$i<=5;$i++){
						$correct_ans[$i]=$this->request->data['QuestionBank']['ans'][$i];
						//pr($correct_ans[$i]);
					}
				

				/*	$ans_string=implode(",", $correct_ans);
					if($this->QuestionBank->save($this->request->data)){
						$this->QuestionBank->saveField('correct_ans',$ans_string);
					if($this->QuestionBank->save($data)){
						$this->Session->setFlash('Question added Successfully!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'QuestionBanks','action'=>'index'));
					}
					else{
						$this->Session->setFlash('Try again','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'QuestionBanks','action'=>'add_questions'));
					}

				}
			}
	}

	public function delete_questions($id=null){
				$this->layout='ev_admin';
				$this->QuestionBank->delete($id);      
				$this->Session->setFlash("question deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'QuestionBanks','action'=>'index'));
			}

	public function update_questions(){
				$this->layout='ev_admin';

	}*/

}
?>