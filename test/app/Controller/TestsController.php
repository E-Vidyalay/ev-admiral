<?php
	class TestsController extends AppController{
		
		public function index(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Test');
				$user_id=$this->Auth->user('id');
				$tests=$this->Test->find('all',array('order'=>'Test.date DESC'));
				//pr($tests);
				$this->set('tests',$tests);
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}	
		
		public function map_test_students($test_id=null,$prac_id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Test');
				$this->loadModel('StudentSubjectMapping');
				$this->loadModel('Student');
				$this->loadModel('TestStudentMapping');
				$this->loadModel('PracticalTest');
				$this->loadModel('PracticalStudentTestMapping');
				//$test_id=$this->Session->read('test_id');
				$user_id=$this->Auth->user('id');
				$test=$this->Test->findById($test_id);
				$students=$this->StudentSubjectMapping->find('all',array('conditions'=>array('subject_id'=>$test['Subject']['id'])));
				//pr($students);die();
				$this->set('test_id',$test_id);
				$this->set('user_id',$user_id);
				$this->set('students',$students);
				if($this->request->is('post')){
					$data=$this->request->data;
					$student_request=$data['TestStudentMapping']['Student'];
					$valid_students=array();
					foreach ($student_request as $st) {
						if($st!='0'){
							$valid_students[]=$st;
						}
					}
					$student_test_array=array();
					$student_password_array=array();
					$mailing_list=array();$parent_mailing_list=array();
					for($i=0;$i<count($valid_students);$i++){
						$mailing_list[]=$this->Student->find('first',array('conditions'=>array('id'=>$valid_students[$i]),'fields'=>array('email')));
					}
					for($i=0;$i<count($valid_students);$i++){
						$parent_mailing_list[]=$this->Student->find('first',array('conditions'=>array('id'=>$valid_students[$i]),'fields'=>array('parent_email')));
					}
					
					for($i=0;$i<count($mailing_list);$i++){
						// $Email = new CakeEmail('gmail');
						// $Email->from(array('lakhan.m.samani@gmail.com' => 'Santmegh Education'))
						//     ->to('lakhan.m.samani@gmail.com')//$mailing_list[$i]['Student']['email']
						//     ->subject('Test Scheduled')
						//     ->send('Test Details:
						//     		Test Name: '.$test['Test']['name'].' , Subject name:'.$test['Subject']['name'].', Date:'.$test['Test']['date'].' , Start Time:'.$test['Test']['start_time'].' , End Time:'.$test['Test']['end_time']);
						
					}
					for($i=0;$i<count($parent_mailing_list);$i++){
						// $Email = new CakeEmail('gmail');
						// $Email->from(array('lakhan.m.samani@gmail.com' => 'Santmegh Education'))
						//     ->to('lakhan.m.samani@gmail.com')//$parent_mailing_list[$i]['Student']['email']
						//     ->subject('Test Scheduled')
						//     ->send('Test Details:
						//     		Test Name: '.$test['Test']['name'].' , Subject name:'.$test['Subject']['name'].', Date:'.$test['Test']['date'].' , Start Time:'.$test['Test']['start_time'].' , End Time:'.$test['Test']['end_time']);
						
						
					}
					for($i=0;$i<count($valid_students);$i++){
						$student_test_array[$i]['test_id']=$data['TestStudentMapping']['test_id'];
						$student_test_array[$i]['student_id']=$valid_students[$i];
						$student_test_array[$i]['updated_by']=$data['TestStudentMapping']['updated_by'];
					}
					// for($y=0;$y<count($valid_students);$y++){
					// 	$student_password_array[$y]['password']=$data['TestStudentMapping']['password'];
					// 	$student_password_array[$y]['id']=$valid_students[$y];
					// 	$student_password_array[$y]['updated_by']=$data['TestStudentMapping']['updated_by'];
					// }
					$prac_student_array=array();
					$prac_student_array=$student_test_array;
					
					//&& $this->Student->saveMany($student_password_array) in codition for password.
					if($this->TestStudentMapping->saveMany($student_test_array) ){
						if($prac_id!=null){
							for($z=0;$z<count($prac_student_array);$z++){
								$prac_student_array[$z]['prac_id']=$prac_id;
							}
							
							$this->PracticalStudentTestMapping->saveMany($prac_student_array);
						}
						$this->Session->setFlash('Test created Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'tests','action'=>'index'));
					}
					else{
							$this->Session->setFlash('Sorry..system was not able to create test, please try again.!','default',array('class'=>'alert alert-danger'),'error');
							$this->redirect(array('controller'=>'users','action'=>'index'));
					}
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		
		public function update_student_test_mapping($test_id=null,$prac_id){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Test');
				$this->loadModel('StudentSubjectMapping');
				$this->loadModel('Student');
				$this->loadModel('TestStudentMapping');
				$this->loadModel('PracticalStudentTestMapping');
				$test_details=$this->Test->findById($test_id);
				$students=$this->StudentSubjectMapping->find('all',array('conditions'=>array('subject_id'=>$test_details['Subject']['id'])));
				$appeared_list=$this->TestStudentMapping->find('all',array('conditions'=>array('test_id'=>$test_id)));
				$this->set('students',$students);
				$this->set('appeared',$appeared_list);
				$this->set('user_id',$this->Auth->user('id'));
				$this->set('test_id',$test_id);
				if($this->request->is('post')){
					$this->TestStudentMapping->deleteAll(array('test_id'=>$test_id));
					$this->PracticalStudentTestMapping->deleteAll(array('prac_id'=>$prac_id));
					$data=$this->request->data;
					$student_request=$data['TestStudentMapping']['Student'];
					$valid_students=array();
					foreach ($student_request as $st) {
						if($st!='0'){
							$valid_students[]=$st;
						}
					}
					$student_test_array=array();
					$student_password_array=array();
					for($i=0;$i<count($valid_students);$i++){
						$student_test_array[$i]['test_id']=$data['TestStudentMapping']['test_id'];
						$student_test_array[$i]['student_id']=$valid_students[$i];
						$student_test_array[$i]['updated_by']=$data['TestStudentMapping']['updated_by'];
					}
					$student_prac_array=array();
					for($i=0;$i<count($valid_students);$i++){
						$student_prac_array[$i]['prac_id']=$prac_id;
						$student_prac_array[$i]['student_id']=$valid_students[$i];
						$student_prac_array[$i]['updated_by']=$data['TestStudentMapping']['updated_by'];
					}
					/*for($y=0;$y<count($valid_students);$y++){
						$student_password_array[$y]['password']=$data['TestStudentMapping']['password'];
						$student_password_array[$y]['id']=$valid_students[$y];
						$student_password_array[$y]['updated_by']=$data['TestStudentMapping']['updated_by'];
					}*/
					// && $this->Student->saveMany($student_password_array) in codition
					if($this->TestStudentMapping->saveMany($student_test_array) && $this->PracticalStudentTestMapping->saveMany($student_prac_array)){
						$this->Session->setFlash('Test Updated Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'tests','action'=>'index'));
					}
					else{
							$this->Session->setFlash('Sorry..system was not able to update test, please try again.!','default',array('class'=>'alert alert-danger'),'error');
							$this->redirect(array('controller'=>'users','action'=>'index'));
					}
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}

		}
		public function create_test(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Test');
				$this->loadModel('Subject');
				$this->loadModel('QuestionBank');
				$this->loadModel('Markingscheme');
				$this->loadModel('TestQuestionMapping');
				$this->loadModel('PracticalTest');
				$this->set('user_id',$this->Auth->user('id'));
				$this->set('subjects',$this->Subject->find('list',array('fields' => array('id','display_name'))));
				$this->set('marking_scheme',$this->Markingscheme->find('list',array('fields' => array('id','display_name'))));
				if($this->request->is('post')){
					$data=$this->request->data;
					
					$subject_id=$data['Test']['subject_id'];
					$limit=$data['Test']['question_limit'];
					$question_count=$this->QuestionBank->find('all',array('conditions'=>array('subject_id'=>$subject_id)));
					if($limit>count($question_count)){
						$this->Session->setFlash('Error in Question Limit : This many questions are not available','default',array('class'=>'alert alert-danger'),'error');
						
					}
					else{
						if($this->Test->save($this->data)){
						//$test_id=$this->Test->getLastInsertId());
						
						
						$question_array=$this->QuestionBank->find('all',array('conditions'=>array('subject_id'=>$subject_id)));
						//pr($question_array);die();
						$random_key=array_rand($question_array,$limit);
						//pr($random_key);die();
						$random_question=array();
						for($i=0;$i<count($random_key);$i++){
							$random_question[]=$question_array[$random_key[$i]];
						}
						shuffle($random_question);
						$q_id=array();$mapping=array();
						$test_id=$this->Test->getLastInsertId();
						$prac_array=array();
						$prac_id=NULL;
						foreach ($random_question as $q){
							$q_id[]=$q['QuestionBank']['id'];
						}
						for($y=0;$y<count($q_id);$y++){
							$mapping[$y]['question_id']=$q_id[$y];
							$mapping[$y]['test_id']=$test_id;
							$mapping[$y]['updated_by']=$this->Auth->user('id');
						}
						if($this->TestQuestionMapping->saveMany($mapping)){
							if($data['Test']['prac_chk']==1){

								$prac_array['test_id']=$test_id;
								$prac_array['name']=$data['Test']['name']. " Practical Exam";
								$prac_array['total_marks']=$data['Test']['prac_mrks'];
								$prac_array['updated_by']=$this->Auth->user('id');
								$this->PracticalTest->save($prac_array);
								$prac_id=$this->PracticalTest->getLastInsertId();
								
							}

							$this->Session->setFlash('Test created Successfully.!','default',array('class'=>'alert alert-success'),'success');
							$this->redirect(array('controller'=>'tests','action'=>'map_test_students',$test_id,$prac_id));
						}
						else{
							$this->Session->setFlash('Sorry..system was not able to create test, please try again.!','default',array('class'=>'alert alert-danger'),'error');
							//$this->redirect(array('controller'=>'tests','action'=>'create_test'));
						}
					}
					
					}
					
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}

		public function student_test_view($id=null){
			$this->layout='santmegh_student';
			$this->set('title','Santmegh Education | Test');
			$this->loadModel('TestQuestionMapping');
			$this->loadModel('TestQuestionStudentMapping');
			$this->loadModel('TestStudentResult');
			$this->loadModel('Student');
			$student_id=$this->Auth->user('id');
			$test_details=$this->Test->findById($id);
			//pr($test_details['Test']['end_time']);
			//pr(date("H:i:s"));
			$diff=strtotime($test_details['Test']['end_time'])-strtotime(date("H:i:s"));
			$hr=(int)($diff/3600);
			$kalan= $diff % 3600;
			$minutes = (int)(($kalan) / 60);
			$seconds = ($diff % 60 ) ;
			$time_diff=$hr.":".$minutes.":".$seconds;
			$this->set('time_diff',$test_details['Test']['test_timer']);
			$this->set('test_dt',$test_details);
			$questions=$this->TestQuestionMapping->find('all',array('conditions'=>array('test_id'=>$id)));
			shuffle($questions);
			$this->set("questions",$questions);
			if($this->request->is('post')){
				$data=$this->data['Question'];
				pr($data);
				
				$answered_array=array();
				for($i=0;$i<count($data);$i++){
					$ans_string=implode(",", $data[$i]['ans']);
					$data[$i]['ans_s']=$ans_string;
					$data[$i]['student_id']=$student_id;
					$data[$i]['test_id']=$id;;
					$answered_array[]=$ans_string;
									}
				
				//pr($answered_array);
				if($this->TestQuestionStudentMapping->saveMany($data)){
					$correct_ans=0;
					$incorrect_ans=0;
				$unanswered=0;
				for($i=0;$i<count($data);$i++){
					if($data[$i]['correct_ans']==$answered_array[$i]){
						$correct_ans=$correct_ans+1;
					}
					else if($answered_array[$i]=="0,0,0,0,0"){
						$unanswered=$unanswered+1;
					}
					else{
						$incorrect_ans=$incorrect_ans+1;
					}

				}
				//pr($correct_ans);
				//pr($unanswered);
				//pr($incorrect_ans);

				$positive_mrk=$test_details['Markingscheme']['positive_marks'];
				$negative_mrk=$test_details['Markingscheme']['negative_marks'];
				$subject=$test_details['Subject']['name'];
				$total_questions=$test_details['Test']['question_limit'];
				$total_marks=$total_questions*$positive_mrk;
				$marks_obtained=($correct_ans*$positive_mrk)-($incorrect_ans*$negative_mrk)+($unanswered*0);
				$test_student_array=array();
				$test_student_array['student_id']=$student_id;
				$test_student_array['test_id']=$id;
				$test_student_array['correct_ans']=$correct_ans;
				$test_student_array['incorrect_ans']=$incorrect_ans;
				$test_student_array['unmarked']=$unanswered;
				$test_student_array['total_mrks']=$total_marks;
				$test_student_array['marks_obtained']=$marks_obtained;
				$this->Session->write('results',$test_student_array);
				$this->TestStudentResult->save($test_student_array);
				$student_details=$this->Student->findById($student_id);
				// $Email = new CakeEmail('gmail');
				// $Email->from(array('lakhan.m.samani@gmail.com' => 'Santmegh Education'))
				//     ->to('lakhan.m.samani@gmail.com')//$student_details['Student']['email']
				//     ->subject('Test Results')
				//     ->send('Results:
				//     		Test Name: '.$test_details['Test']['name'].' , Subject name:'.$test_details['Subject']['name'].', Date:'.$test_details['Test']['date'].' , Correct Answer:'.$correct_ans.' , Incorrect Answer:'.$incorrect_ans.' , Unanswered:'.$unanswered.' , Score: '.$marks_obtained.' / '.$total_marks);
				// $Email = new CakeEmail('gmail');
				// $Email->from(array('lakhan.m.samani@gmail.com' => 'Santmegh Education'))
				//     ->to('lakhan.m.samani@gmail.com')//$student_details['Student']['parent_email']
				//     ->subject('Test Results')
				//      ->send('Results:
				//     		Test Name: '.$test_details['Test']['name'].' , Subject name:'.$test_details['Subject']['name'].', Date:'.$test_details['Test']['date'].' , Correct Answer:'.$correct_ans.' , Incorrect Answer:'.$incorrect_ans.' , Unanswered:'.$unanswered.' , Score: '.$marks_obtained.' / '.$total_marks);
				
				$this->Session->setFlash('Test submited Successfully.! Your marks are emailed to you and your patents','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'tests','action'=>'result_view',$student_id,$id));
				}
				


			}
		}
		public function delete_test($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Delete Test');
				$this->Test->delete($id);      
				$this->Session->setFlash("Test Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'tests','action'=>'index'));
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function reports(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Reports');
				$tests=$this->Test->find('all');
				$this->set('tests',$tests);
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function reports_main(){
			
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Reports');
				$tests=$this->Test->find('all');
				$this->set('tests',$tests);
	       
		}
		public function reports_test($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Reports');
				$this->loadModel('TestStudentMapping');
				$this->loadModel('TestStudentResult');
				$this->loadModel('PracticalMark');
				$this->loadModel('PracticalTest');

				$test=$this->PracticalTest->find('first',array('conditions'=>array('test_id'=>$id)));
				$st1=$this->PracticalMark->find('all',array('conditions'=>array('PracticalMark.prac_id'=>$test['PracticalTest']['id'])));
				$students=$this->TestStudentMapping->find('all',array('conditions'=>array('test_id'=>$id)));
				$this->set('prac_r',$st1);
				//pr($st1);
				$this->set('students',$students);
				$this->set('Test',$this->Test->findById($id));
				
				$results=$this->TestStudentResult->find('all',array('conditions'=>array('test_id'=>$id)));
				$this->set('results',$results);
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function report_main_site($id=null){
			
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Reports');
				$this->loadModel('TestStudentMapping');
				$this->loadModel('TestStudentResult');
				$this->loadModel('PracticalMark');
				$this->loadModel('PracticalTest');

				$test=$this->PracticalTest->find('first',array('conditions'=>array('test_id'=>$id)));
				$st1=$this->PracticalMark->find('all',array('conditions'=>array('PracticalMark.prac_id'=>$test['PracticalTest']['id'])));
				$students=$this->TestStudentMapping->find('all',array('conditions'=>array('test_id'=>$id)));
				$this->set('prac_r',$st1);
				//pr($st1);
				$this->set('students',$students);
				$this->set('Test',$this->Test->findById($id));
				
				$results=$this->TestStudentResult->find('all',array('conditions'=>array('test_id'=>$id)));
				$this->set('results',$results);
	       
		}
		public function update_test($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Update Test');
				$this->set('user_id',$this->Auth->user('id'));
				$this->loadModel('Subject');
				$this->loadModel('Markingscheme');
				$this->loadModel('TestQuestionMapping');
				$this->loadModel('PracticalMark');
				$this->loadModel('PracticalTest');
				$this->loadModel('PracticalStudentTestMapping');
				$this->loadModel('QuestionBank');
				$pr_t=$this->PracticalTest->find('first',array('conditions'=>array('test_id'=>$id)));
				$pr_id=$pr_t['PracticalTest']['id'];
				//$pr_st=$this->PracticalStudentTestMapping->find('all',array('conditions'=>array('prac_id'=>$pr_id)));
				//$pr_mrks=$this->PracticalMark->find('all',array('conditions'=>array('prac_id'=>$pr_id)));
				$this->set('subjects',$this->Subject->find('list',array('fields' => array('id','display_name'))));
				$this->set('marking_scheme',$this->Markingscheme->find('list',array('fields' => array('id','display_name'))));
				if(empty($this->data)){
	                $this->data=$this->Test->findById($id);
	                //pr($this->Test->findById($id));
	            }
				else if(!$id){
					 $this->Session->setFlash("Invalid Test",'default',array('class'=>'alert alert-danger'),'error');
					 
				}
	            else{
	            	//pr($this->data);die();
	            	$data=$this->request->data;
					$subject_id=$data['Test']['subject_id'];
					$limit=$data['Test']['question_limit'];
					$question_count=$this->QuestionBank->find('all',array('conditions'=>array('subject_id'=>$subject_id)));
					if($limit>count($question_count)){
						$this->Session->setFlash('Error in Question Limit : This many questions are not available','default',array('class'=>'alert alert-danger'),'error');
						
					}
					else{
						//$this->PracticalMark->deleteAll(array('prac_id'=>$pr_id));
						//$this->PracticalStudentTestMapping->deleteAll(array('prac_id'=>$pr_id));
						//$this->PracticalTest->delete(array('test_id'=>$id));
						//$this->TestQuestionMapping->deleteAll(array('test_id'=>$id));
	                if($this->Test->save($this->data)){
	                	$this->TestQuestionMapping->deleteAll(array('test_id'=>$id));
	                	$data=$this->request->data;

						$subject_id=$data['Test']['subject_id'];
						$limit=$data['Test']['question_limit'];
						$question_array=$this->QuestionBank->find('all',array('conditions'=>array('subject_id'=>$subject_id)));
						//pr($question_array);die();
						$random_key=array_rand($question_array,$limit);
						//pr($random_key);die();
						$random_question=array();
						for($i=0;$i<count($random_key);$i++){
							$random_question[]=$question_array[$random_key[$i]];
						}
						shuffle($random_question);
						$q_id=array();$mapping=array();
						$test_id=$this->Test->getLastInsertId();
						foreach ($random_question as $q){
							$q_id[]=$q['QuestionBank']['id'];
						}
						for($y=0;$y<count($q_id);$y++){
							$mapping[$y]['question_id']=$q_id[$y];
							$mapping[$y]['test_id']=$id;
							$mapping[$y]['updated_by']=$this->Auth->user('id');
						}
						if($this->TestQuestionMapping->saveMany($mapping)){
							$pr_a=array();
							$pr_a['id']=$pr_id;
							$pr_a['name']=$data['Test']['name']."Practical Exam";
							$pr_a['total_marks']=$data['Test']['prac_mrks'];
							$pr_a['test_id']=$id;
							$pr_a['updated_by']=$this->Auth->user('id');
							$this->PracticalTest->save($pr_a);
							$this->Session->setFlash('Test updated Successfully.!','default',array('class'=>'alert alert-success'),'success');
							$this->redirect(array('controller'=>'tests','action'=>'update_student_test_mapping',$id,$pr_id));
						}
						else{
							$this->Session->setFlash('Sorry..system was not able to updated test, please try again.!','default',array('class'=>'alert alert-danger'),'error');
							$this->redirect(array('controller'=>'tests','action'=>'update_test'));
						}
	                }
	                else{
	                    $this->Session->setFlash("Test not Updated",'default',array('class'=>'alert alert-danger'),'error');
	                    $this->redirect(array('controller'=>'tests','action'=>'update_test'));
	                 
	                }
					}
	            	
	            }
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function result_view($student_id,$test_id){
			$this->layout='santmegh_student';
			$this->set('title','Santmegh Education | Students');
			$this->loadModel('Student');
			$this->loadModel('TestStudentResult');
			$this->loadModel('Markingscheme');
			$result=$this->TestStudentResult->find('first',array('conditions'=> array('student_id'=>$student_id,'test_id'=>$test_id)));
			$this->set('result',$result);
			//pr($result);
			$marking_scheme=$this->Markingscheme->findById($result['Test']['marking_scheme_id']);
			$this->set('marking_scheme',$marking_scheme);
			//pr($result);
		}
	}
?>