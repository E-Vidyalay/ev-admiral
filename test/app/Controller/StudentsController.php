<?php
	class StudentsController extends AppController{
			public function beforeFilter() {
	        parent::beforeFilter();
			  $this->Auth->loginRedirect = array('controller' => 'students', 'action' => 'index_student');
       		  $this->Auth->logoutRedirect = array('controller' => 'students', 'action' => 'login');
        	  $this->Auth->loginAction = array('controller' => 'students', 'action' => 'login');
			
			 // Basic setup
	        $this->Auth->authenticate = array('Form');
	
	        // Pass settings in
	       $this->Auth->authenticate = array(
	            'Form' => array('userModel' => 'Student')
	        );
	        $this->Auth->allow('login','forgot_password','update_password');
	    }
			public function login(){
			
			$this->layout='login';
			$this->set('title','Santmegh Education | Login');
			if($this->Session->check('Auth.Student')){
				$this->redirect(array('controller'=>'students','action' => 'index_student'));		
			}
			
			// if we get the post information, try to authenticate
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->Session->setFlash('Successfully logged in','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'students','action' => 'index_student'));
					
				} else {
					$this->Session->setFlash('Invalid username or password','default',array('class'=>'alert alert-danger'),'error');
				}
			} 
		}
		 public function logout(){
	        if($this->Auth->logout()){
	        	$this->Session->setFlash('Successfully Logged out of the system','default',array('class'=>'alert alert-success'),'success');
	            $this->redirect(array('controller'=>'students','action'=>'login'));
	        }
	        else{
	            die('Sorry incorrect.');
	        }
	    }
	
		public function index(){
			if($this->Auth->user('name')=='admin'){
				$this->loadModel('StudentSubjectMapping');
				$this->set('title','Santmegh Education | Students');
				$this->layout='santmegh_main';
				$studentSubjectMapping=$this->StudentSubjectMapping->find('all');
				$student=$this->Student->find('all');
				$this->set('students',$student);
				$this->set('SubjectMapping',$studentSubjectMapping);
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function add_student(){
			if($this->Auth->user('name')=='admin'){
				$this->loadModel('StudentSubjectMapping');
				$this->loadModel('Subject');
				$this->set('user_id',$this->Auth->user('id'));
				$this->set('title','Santmegh Education | Students');
				$this->layout='santmegh_main';
				$this->set('subjects',$this->Subject->find('all'));
				if($this->request->is('post')){
					
					if($this->Student->save($this->data)){
						$this->Student->saveField('username',$this->data['Student']['email']);
						$s_id=$this->Student->getLastInsertId();
						$subjects=$this->data['Student']['Subject'];
						$validSubjects=array();
						foreach($subjects as $sub){
							if(!empty($sub) && $sub!='0'){
								$validSubjects[]=$sub;
							}
						}
						
						$mapping_array=array();
						for($i=0;$i<count($validSubjects);$i++){
							$mapping_array[$i]['subject_id']=$validSubjects[$i];
							$mapping_array[$i]['student_id']=$s_id;
							$mapping_array[$i]['updated_by']=$this->Auth->user('id');
						}
						if($this->StudentSubjectMapping->saveMany($mapping_array)){
							$this->Session->setFlash('Student added Successfully.!','default',array('class'=>'alert alert-success'),'success');
							$this->redirect(array('controller'=>'students','action'=>'index'));
						}
						else{
							$this->Session->setFlash('Sorry..system was not able to add student, please try again.!','default',array('class'=>'alert alert-danger'),'error');
							$this->redirect(array('controller'=>'students','action'=>'add_student'));
						}
					
					
					}
					
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function delete_student($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Delete Student');
				$this->Student->delete($id);      
				$this->Session->setFlash("Student Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'students','action'=>'index'));
	        }
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function view_student($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->loadModel('StudentSubjectMapping');
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | View Student Details');
				$this->set('student',$this->Student->findById($id));
				$this->set('studentSubjectMap',$this->StudentSubjectMapping->find('all',array('conditions'=>array('student_id'=>$id))));
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function update_student($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->loadModel('StudentSubjectMapping');
				$this->loadModel('Subject');
				$this->set('user_id',$this->Auth->user('id'));
				$this->set('title','Santmegh Education | Students');
				$this->layout='santmegh_main';
				$this->set('subjects',$this->Subject->find('all'));
				if(empty($this->data)){
					$student_details=$this->Student->findById($id);
					$subject_details=$this->StudentSubjectMapping->find('all',array('conditions'=>array('student_id'=>$id)));
					
					$subjects=array();
					foreach ($subject_details as $sub) {
						$subjects[]=$sub['Subject']['id'];
					}
					$final_subjects['Subject']=$subjects;
					$final_data['Student']=array_merge($student_details['Student'],$final_subjects);
					
					$this->set('subs',$subjects);
					$this->data=$student_details;
					
				}
				else{
					
					$this->StudentSubjectMapping->deleteAll(array('student_id'=>$id));
					
					if($this->Student->save($this->data)){
						$this->Student->saveField('username',$this->data['Student']['email']);
						//$s_id=$this->Student->getLastInsertId();
						$subjects=$this->data['Student']['Subject'];
						$validSubjects=array();
						foreach($subjects as $sub){
							if(!empty($sub) && $sub!='0'){
								$validSubjects[]=$sub;
							}
						}
						
						$mapping_array=array();
						for($i=0;$i<count($validSubjects);$i++){
							$mapping_array[$i]['subject_id']=$validSubjects[$i];
							$mapping_array[$i]['student_id']=$id;
							$mapping_array[$i]['updated_by']=$this->Auth->user('id');
						}
						if($this->StudentSubjectMapping->saveMany($mapping_array)){
							$this->Session->setFlash('Student updated Successfully.!','default',array('class'=>'alert alert-success'),'success');
							$this->redirect(array('controller'=>'students','action'=>'index'));
						}
						else{
							$this->Session->setFlash('Sorry..system was not able to update student, please try again.!','default',array('class'=>'alert alert-danger'),'error');
							$this->redirect(array('controller'=>'students','action'=>'update_student'));
						}
					
					
					}
				
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}

		public function index_student(){
			$this->layout="santmegh_student";
			$this->set('title','Santmegh Education | Students');
			$this->loadModel('Test');
			$this->loadModel('StudentSubjectMapping');
			$this->loadModel('TestStudentMapping');
			$this->loadModel('TestStudentResult');
			$student_id=$this->Auth->user('id');
			$this->set('student_id',$student_id);
			$test_array=$this->TestStudentMapping->find('all',array('conditions'=>array('student_id'=>$student_id)));
			$this->set('givenTest',$this->TestStudentResult->find('all',array('conditions'=>array('student_id'=>$student_id))));
			$valid_test_array=array();
			$today=date("Y-m-d");
			$c_time=date("H:i:s");
			//pr($test_array);
			
			for($i=0;$i<count($test_array);$i++){
				$end_time=$test_array[$i]['Test']['end_time'];
				$start_time=$test_array[$i]['Test']['start_time'];
				if($test_array[$i]['Test']['date']==$today && $c_time<=date('H:i:s',strtotime($end_time)) && $c_time>=date('H:i:s',strtotime($start_time))){
					$valid_test_array[]=$test_array[$i];
				}
			}
			//pr($valid_test_array);
			$this->set('tests',$valid_test_array);
			
		}
		public function forgot_password(){
			$this->layout='forgot_password';
			$this->set('title','Santmegh Education | Forgot Password');

			if($this->request->is('post')){
				$student_dt=$this->Student->find('first',array('conditions'=>array('Student.email'=>$this->data['Student']['email'])));
				//pr($student_dt);pr($this->data);die();
				$students=$this->Student->find('all');
				$f=0;
				foreach ($students as $st) {
					if($this->data['Student']['email']==$st['Student']['email']){
						$f=1;
					}
					
				}
				if($f==1){
						
						$Email = new CakeEmail('gmail');
						$Email->from(array('lakhan.samani@actonate.com' => 'Santmegh Education'))
						    ->to('lakhan.samani@actonate.com')//$data['Student']['email']
						    ->subject('Forgot Password')
						    ->send('Please set your new password using the link the given bellow
							http://localhost/santmegh-computer-education/students/update_password/'.$student_dt['Student']['id']);
						$this->Session->setFlash('Password reset link sent to your mail','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'students','action'=>'login'));	
				}
				else{
						$this->Session->setFlash('No such email address found','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'students','action'=>'login'));
				}
			}
		}
		public function update_password($id=null){
			$this->layout='forgot_password';
			$this->set('title','Santmegh Education | Forgot password');
			$this->set('updated',$id);
			if($this->request->is('post')){
				if($this->Student->save($this->data)){
					$this->Session->setFlash('Password updated','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'students','action'=>'login'));	
				}
				else{
					$this->Session->setFlash('Sorry password not updated try again',array('class'=>'alert alert-danger'),'error');
					$this->redirect(array('controller'=>'students','action'=>'login'));	
				}
			}
		}
		public function change_pass(){
			$this->layout='santmegh_student';
			$this->set('user_id',$this->Auth->user('id'));
			$this->set('title','Change Password');
			if($this->request->is('post')){
				if($this->Student->save($this->data)){
					$this->Session->setFlash('Password updated Successfully.!','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'students','action'=>'index_student'));
				}
				else{
					$this->Session->setFlash('Password not updated please try again!','default',array('class'=>'alert alert-success'),'success');
					//$this->redirect(array('controller'=>'students','action'=>'index_student'));
				}
			}
		}
	}
?>