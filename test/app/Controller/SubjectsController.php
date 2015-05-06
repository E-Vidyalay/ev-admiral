<?php
	class SubjectsController extends AppController{
		
		public function add_subject(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Add Subject');
				$this->set('user_id',$this->Auth->user('id'));
				if($this->request->is('post')){
					$data=$this->request->data;
					if($this->Subject->save($data)){
						$dname=$data['Subject']['name']." of ".$data['Subject']['standard'];
						$this->Subject->saveField('display_name',$dname);
						$this->Session->setFlash('Subject added Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'subjects','action'=>'index'));
					}
					else{
						$this->Session->setFlash('Sorry..system was not able to add subject, please try again.!','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'subjects','action'=>'add_subject'));
					}
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function index(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Subjects');
				$this->set('subjects',$this->Subject->find('all'));
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function delete_subject($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Delete Subject');
				$this->Subject->delete($id);      
				$this->Session->setFlash("Subject Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'subjects','action'=>'index'));
	        }
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function update_subject($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Update Subject');
				$this->set('user_id',$this->Auth->user('id'));
				
				if(empty($this->data)){
	                $this->data=$this->Subject->findById($id);
	            }
				else if(!$id){
					 $this->Session->setFlash("Invalid Subject",'default',array('class'=>'alert alert-danger'),'error');
					 
				}
	            else{
	            	//pr($this->data);die();
	                if($this->Subject->save($this->data)){
						$dname=$data['Subject']['name']." of ".$data['Subject']['standard'];
						$this->Subject->saveField('display_name',$dname);
	                    $this->Session->setFlash("Subject Updated Successfully",'default',array('class'=>'alert alert-success'),'success');
	                    $this->redirect(array('controller'=>'subjects','action'=>'index'));
	                }
	                else{
	                    $this->Session->setFlash("Subject not Updated",'default',array('class'=>'alert alert-danger'),'error');
	                 
	                }
	            }
	        }
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		
	}
?>