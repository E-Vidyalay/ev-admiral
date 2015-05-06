<?php
	class MarkingschemesController extends AppController{
		public function index(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Marking Schemes');
				$this->set('schemes',$this->Markingscheme->find('all'));
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function add_scheme(){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Add Marking Schemes');
				$this->set('user_id',$this->Auth->user('id'));
				if($this->request->is('post')){
					$data=$this->request->data;
					if($this->Markingscheme->save($data)){
						$dname="+ ".$data['Markingscheme']['positive_marks'].", - ".$data['Markingscheme']['negative_marks'];
						$this->Markingscheme->saveField('display_name',$dname);
						$this->Session->setFlash('Marking Scheme added Successfully.!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'Markingschemes','action'=>'index'));
					}
					else{
						$this->Session->setFlash('Sorry..system was not able to add marking scheme, please try again.!','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'Markingschemes','action'=>'add_scheme'));
					}
				}
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
			
		}
		public function delete_scheme($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Delete Marking Scheme');
				$this->Markingscheme->delete($id);      
				$this->Session->setFlash("Marking Scheme Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'Markingschemes','action'=>'index'));
			}
			else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}
		}
		public function update_scheme($id=null){
			if($this->Auth->user('name')=='admin'){
				$this->layout='santmegh_main';
				$this->set('title','Santmegh Education | Update Marking Scheme');
				$this->set('user_id',$this->Auth->user('id'));
				
				if(empty($this->data)){
	                $this->data=$this->Markingscheme->findById($id);
	            }
				else if(!$id){
					 $this->Session->setFlash("Invalid Marking Scheme",'default',array('class'=>'alert alert-danger'),'error');
					 
				}
	            else{
	            	$data=$this->request->data;
	                if($this->Markingscheme->save($this->data)){
	                	$dname="+ ".$data['Markingscheme']['positive_marks'].", - ".$data['Markingscheme']['negative_marks'];
						$this->Markingscheme->saveField('display_name',$dname);
	                    $this->Session->setFlash("Marking Scheme Updated Successfully",'default',array('class'=>'alert alert-success'),'success');
	                    $this->redirect(array('controller'=>'Markingschemes','action'=>'index'));
	                }
	                else{
	                    $this->Session->setFlash("Marking Scheme not Updated",'default',array('class'=>'alert alert-danger'),'error');
	                 
	                }
	            }
	        }
	        else{
				$this->redirect(array('controller'=>'students','action'=>'index_student'));
			}

		}
	}
?>