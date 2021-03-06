<?php
class QuestionBanksController extends AppController{

	public $uses=array('QuestionBank','Topic','SubTopic','Image','Markingscheme','Standard');
	public function index(){
		$a=$this->QuestionBank->find('all');
		$this->set('questions', $a);
		$this->layout='ev_admin';
	}

	public function insert(){
		$this->layout='ev_question';
		$this->set('user_id',$this->Auth->user('id'));
		$this->set('images',$this->Image->find('all'));
		$this->set('marking',$this->Markingscheme->find('list',array('fields'=>array('id','display_name'))));
		$this->set('standards',$this->Standard->find('list',array('fields'=>array('id','name'))));
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
				$this->redirect(array('controller'=>'question_banks','action'=>'insert'));
			}
			
		}
		
	}
	public function get_sub_topic($id=null){
		$this->layout='ajax';
		if(isset($id)){
			$this->set('if_data',true);
			$sub_topic=$this->SubTopic->find('list',array('fields'=>array('id','name'),'conditions'=>array('topic_id'=>$id)));
			$this->set('sub_topics',$sub_topic);
		}
		else{
			$this->set('if_data',false);
		}
	}
	public function get_topic($id=null){
		$this->layout='ajax';
		$standard=$this->Standard->find('first',array('conditions'=>array('Standard.id'=>$id)));
		//pr($standard);
		if(isset($id)){
			$this->set('if_topic_data',true);
			$topic=$this->Topic->find('list',array('fields'=>array('id','display_name'),'conditions'=>array('level_id'=>$standard['Standard']['level_id'])));
			$this->set('topics',$topic);
		}
		else{
			$this->set('if_topic_data',false);
		}
	}

	public function delete($id=null){
				$this->layout='ev_admin';
				$this->QuestionBank->delete($id);      
				$this->Session->setFlash("Question Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'QuestionBanks','action'=>'index'));
	}


	public function update($id=null){
				$this->layout='ev_question';
				$this->set('user_id',$this->Auth->user('id'));
				$this->set('images',$this->Image->find('all'));
				$this->set('standards',$this->Standard->find('list',array('fields'=>array('id','name'))));
				if(empty($this->data)){
	                $q=$this->QuestionBank->findById($id);		
					$ans1=explode(",", $q['QuestionBank']['correct_ans']);
					$f=1;
					$m=array();
					foreach($ans1 as $a){
						$m[$f]=$a;
						$f++;
					}
					$ans['ans']=$m;
					$final_data['QuestionBank']=array_merge($q['QuestionBank'],$ans);				
					$finalQ_bank=$final_data;
					if(isset($q['QuestionBank']['topic_id']) || $q['QuestionBank']['topic_id']!=null){
						$this->set('has_st',true);
						if($q['QuestionBank']['standard_id']!=null){
							$stand=$this->Standard->find('first',array('conditions'=>array('Standard.id'=>$q['QuestionBank']['standard_id'])));
							$this->set('topics',$this->Topic->find('list',array('conditions'=>array('level_id'=>$stand['Level']['id']),'fields'=>array('id','display_name'))));
						}
						else{
							$this->set('topics',$this->Topic->find('list',array('fields'=>array('id','display_name'))));
						}
						if(isset($q['QuestionBank']['sub_topic_id']) || $q['QuestionBank']['sub_topic_id']!=null){
							$this->set('has_sbt',true);
							$this->set('sub_topics',$this->SubTopic->find('list',array('conditions'=>array('topic_id'=>$q['QuestionBank']['topic_id']),'fields'=>array('id','name'))));
						}
						else{
							$this->set('has_sbt',false);
							$this->set('sbt',$this->SubTopic->find('list',array('conditions'=>array('topic_id'=>$q['QuestionBank']['topic_id']),'fields'=>array('id','name'))));
						}
					}
					else{
						$this->set('has_st',false);
						$this->set('st',$this->Topic->find('list',array('conditions'=>array('level_id'=>$q['QuestionBank']['level_id']),'fields'=>array('id','display_name'))));
					}
					if(isset($q['QuestionBank']['markingscheme_id']) || $q['QuestionBank']['markingscheme_id']!=null){
						$this->set('markingscheme_id',$q['QuestionBank']['markingscheme_id']);
						$this->set('marking',$this->Markingscheme->find('list',array('fields'=>array('id','display_name'))));
					}
					else{
						$this->set('marking',$this->Markingscheme->find('list',array('fields'=>array('id','display_name'))));
					}
					
					$this->data=$finalQ_bank;
					//$this->set('ans',$finalQ_bank['QuestionBank']['ans']);
					
	            }
				else if(!$id){
					 $this->Session->setFlash("Invalid Question",'default',array('class'=>'alert alert-danger'),'error');
					 
				}
	            else{
	            	$data=$this->data;
					$correct_ans=array();
					for($i=1;$i<=5;$i++){
						$correct_ans[$i]=$data['QuestionBank']['ans'][$i];	
					}
					$ans_string=implode(",", $correct_ans);
					$data['QuestionBank']['correct_ans']=$ans_string;
	                if($this->QuestionBank->save($data)){
	                	$this->QuestionBank->saveField('correct_ans',$ans_string);
	                    $this->Session->setFlash("Question Updated Successfully",'default',array('class'=>'alert alert-success'),'success');
	                    $this->redirect(array('controller'=>'question_banks','action'=>'index'));
	                }
	                else{
	                    $this->Session->setFlash("Question not Updated",'default',array('class'=>'alert alert-danger'),'error');
	                }
	            }
	        }
	function delete_all($array=NULL){
        $dataArray=json_decode($array,true);
        foreach($dataArray as $key => $value)
        {
            // pr($value);
            $this->QuestionBank->delete($value);
        }
    }

}
?>