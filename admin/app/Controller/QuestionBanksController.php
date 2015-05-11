<?php
class QuestionBanksController extends AppController{
public $uses=array('QuestionBank','Standard','Subject');
	public function index(){
		$a=$this->QuestionBank->find('all');
		$this->set('questions', $a);
		$this->layout='ev_admin';
	}

	public function insert(){
		$this->layout='ev_question';
		$a=$this->Subject->find('list',array('fields'=>array('id','display_name')));
		$this->set('subjects',$a);
		$this->set('user_id',$this->Auth->user('id'));
		if($this->request->is('post')){
			$data=$this->data;
			$correct_ans=array();
			for($i=1;$i<=5;$i++){
				$correct_ans[$i]=$data['QuestionBank']['ans'][$i];	
			}
			$ans_string=implode(",", $correct_ans);
			$data['QuestionBank']['correct_ans']=$ans_string;
			if($this->QuestionBank->save($data)){
				$this->Session->setFlash('Question added Successfully.!','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'question_banks','action'=>'index'));
			}
			else{
				$this->Session->setFlash('Sorry..system was not able to add question, please try again.!','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('controller'=>'question_banks','action'=>'add_question'));
			}
			
		}
		
	}

	public function delete($id=null){
				$this->layout='ev_admin';
				$this->QuestionBank->delete($id);      
				$this->Session->setFlash("Question Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'QuestionBanks','action'=>'index'));
	}
	
}
?>