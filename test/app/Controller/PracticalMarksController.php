<?php
	class PracticalMarksController extends AppController{
		var $uses=array('PracticalTest','PracticalStudentTestMapping','PracticalMark');
		public function index(){
			
			$this->layout='santmegh_main';
			$this->set('title','Santmegh Education | Add Marking Schemes');
			$this->set('user_id',$this->Auth->user('id'));
			$test=$this->PracticalTest->find('all');
			$this->set('tests',$test);
		}

		public function add_results($prac_id=NULL){
			
				$this->layout='santmegh_main';
				$students=$this->PracticalStudentTestMapping->find('all',array('conditions'=>array('PracticalStudentTestMapping.prac_id'=>$prac_id)));
				
				$this->set('students',$students);
				//pr($students);
				$this->set('user_id',$this->Auth->user('id'));
				$s=$this->PracticalMark->find('all',array('conditions'=>array('PracticalMark.prac_id'=>$prac_id)));
				$this->set('mrks',$s);
				$this->set('prac_id',$prac_id);
				if(empty($this->data)){
					
					$s1=array();
					for($m=1;$m<(count($s));$m++){
						$s1['student'][$m]['id']=$s[$m]['PracticalMark']['id'];
						$s1['student'][$m]['marks']=$s[$m]['PracticalMark']['marks'];
						$s1['student'][$m]['student_id']=$s[$m]['PracticalMark']['student_id'];
						$s1['student'][$m]['prac_id']=$s[$m]['PracticalMark']['prac_id'];
						$s1['student'][$m]['updated_by']=$this->Auth->user('id');
					}
					//$this->data=$s1;
					//pr($s1);

				}
				else{


				if($this->request->is('post')){
					$data=$this->data;
					
					$valid_data=array();
					for($i=1;$i<=count($data['student']);$i++) {
						if($data['student'][$i]['marks']>$students[1]['PraticalTest']['total_marks']){
							$this->Session->setFlash('Sorry..you have entered wrong marks.!','default',array('class'=>'alert alert-danger'),'error');
						}
						else{
							if($data['student'][$i]['marks']!=null){
								$valid_data[$i]['marks']=$data['student'][$i]['marks'];
								$valid_data[$i]['student_id']=$data['student'][$i]['student_id'];
								$valid_data[$i]['prac_id']=$data['student'][$i]['prac_id'];
								$valid_data[$i]['updated_by']=$data['student'][$i]['updated_by'];
								$valid_data[$i]['id']=$data['student'][$i]['id'];

							}

						}
					}
					if($this->PracticalMark->saveMany($valid_data)){
						$this->Session->setFlash('Marks added Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'practical_marks','action'=>'index'));
					}
				}}
		}

		public function print_certi(){
			$this->layout='certificate';
		}

		
	}

?>