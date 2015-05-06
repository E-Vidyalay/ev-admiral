<?php
	class QuestionBanksController extends AppController{
			
		public function index(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Question Bank');
				$this->set('ques',$this->QuestionBank->find('all'));
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}	
		public function add_question(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_question';
				$this->set('title','Santmegh Education | Question Bank');
				$this->loadModel('Subject');
				$this->set('user_id',$this->Auth->user('id'));
				$subjects=$this->Subject->find('list',array('fields' => array('id','display_name')));
				$this->set('subjects',$subjects);
				if($this->request->is('post')){
					//pr($this->data);die();
					$correct_ans=array();
					for($i=1;$i<=5;$i++){
						//if(!empty($this->request->data['QuestionBank']['ans'][$i]) && $this->request->data['QuestionBank']['ans'][$i]!='0'){
							$correct_ans[$i]=$this->request->data['QuestionBank']['ans'][$i];
						//}
						
					}
					$ans_string=implode(",", $correct_ans);
					if($this->QuestionBank->save($this->request->data)){
						$this->QuestionBank->saveField('correct_ans',$ans_string);
						$this->Session->setFlash('Question added Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'question_banks','action'=>'index'));
					}
					else{
						$this->Session->setFlash('Sorry..system was not able to add question, please try again.!','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'question_banks','action'=>'add_question'));
					}
					
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}

		public function view_question($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Question Bank');
				$question=$this->QuestionBank->findById($id);
				$ar=explode(',',$question['QuestionBank']['correct_ans']);
				$f_a=array();
				foreach($ar as $a){
					if($a!='0'){
						$f_a[]=$a;
					}
				}
				$c_a=implode(",", $f_a);
				$this->set('c_a',$c_a);		
				$this->set('question',$question);
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function delete_question($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Question Bank');
				$this->QuestionBank->delete($id);      
				$this->Session->setFlash("Question Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'question_banks','action'=>'index'));
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}

		public function update_question($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_question';
				$this->set('title','Santmegh Education | Question Bank');
				$this->loadModel('Subject');
				$subjects=$this->Subject->find('list',array('fields' => array('id','display_name')));
				$this->set('subjects',$subjects);
				$this->set('user_id',$this->Auth->user('id'));
				if(empty($this->data)){
	                $q=$this->QuestionBank->findById($id);				
					$ans1=explode(",", $q['QuestionBank']['correct_ans']);
					$f=1;
					$m=array();
					foreach($ans1 as $a){
						$m['option'.$f]=$a;
						$f++;
					}
					$ans['ans']=$m;
					$final_data['QuestionBank']=array_merge($q['QuestionBank'],$ans);				
					$finalQ_bank=$final_data;
					$finalSubject['Subject']=$q['Subject'];
					$final_array=array_merge($finalQ_bank,$finalSubject);
					$this->data=$final_array;
					$this->set('ans',$final_array);
					
	            }
				else if(!$id){
					 $this->Session->setFlash("Invalid Question",'default',array('class'=>'alert alert-danger'),'error');
					 
				}
	            else{
	            	$correct_ans=array();
					for($i=1;$i<=5;$i++){
						//if(!empty($this->request->data['QuestionBank']['ans'][$i]) && $this->request->data['QuestionBank']['ans'][$i]!='0'){
							$correct_ans[$i]=$this->request->data['QuestionBank']['ans'][$i];
						//}
						
					}
					$ans_string=implode(",", $correct_ans);
	                if($this->QuestionBank->save($this->data)){
	                	$this->QuestionBank->saveField('correct_ans',$ans_string);
	                    $this->Session->setFlash("Question Updated Successfully",'default',array('class'=>'alert alert-success'),'success');
	                    $this->redirect(array('controller'=>'question_banks','action'=>'index'));
	                }
	                else{
	                    $this->Session->setFlash("Question not Updated",'default',array('class'=>'alert alert-danger'),'error');
	                 
	                }
	            }
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
	}
?>