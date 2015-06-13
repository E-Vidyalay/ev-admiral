<?php
	class MarkingschemesController extends AppController{
		public function index(){
				$a=array();
				$a=$this->Markingscheme->find('all');
				//pr($a);die();
				$this->set('markings',$a);
				$this->layout='ev_admin';
			}

	public function add_marks(){
				$this->layout='ev_admin';
				$this->set('user_id',$this->Auth->user('id'));
				if($this->request->is('post')){
					$data=$this->data;
					//$dname="+ ".$data['Markingscheme']['positive_marks'].", - ".$data['Markingscheme']['negative_marks'];
					//$data['Markingscheme']['display_name']=$dname;
					//pr($data);die();
					if($this->Markingscheme->save($data)){
						$dname="+ ".$data['Markingscheme']['positive_marks'].", - ".$data['Markingscheme']['negative_marks'];
						$this->Markingscheme->saveField('display_name',$dname);
						//$session_id = $this->Session->id()
						$this->Session->setFlash('Marking Scheme added Successfully!','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'Markingschemes','action'=>'index'));
					}
					else{
						$this->Session->setFlash('Try again','default',array('class'=>'alert alert-danger'),'error');
						$this->redirect(array('controller'=>'Markingschemes','action'=>'add_marks'));
					}
				}
			}

		public function delete($id=null){
				$this->layout='ev_admin';
				$this->Markingscheme->delete($id);      
				$this->Session->setFlash("Deleted successfully.",'default',array('class'=>'alert alert-success'),'success');     				
	            $this->redirect(array('controller'=>'Markingschemes','action'=>'index'));
			}
		
		public function update_marks($id=null){
			$this->layout='ev_admin';
				$this->set('user_id',$this->Auth->user('id'));
				if(empty($this->data)){
	               // $data=$this->Markingscheme->findById($id);
	                //$this->data=$data;
	                $this->data=$this->Markingscheme->findById($id);
	            }
				else if(!$id){
					 $this->Session->setFlash("Invalid!",'default',array('class'=>'alert alert-danger'),'error');
					 
				}
	            else{
	            	$data=$this->request->data;
	                if($this->Markingscheme->save($this->data)){
	                	$dname="+ ".$data['Markingscheme']['positive_marks'].", - ".$data['Markingscheme']['negative_marks'];
						$this->Markingscheme->saveField('display_name',$dname);
	                    $this->Session->setFlash("Updated Successfully!!",'default',array('class'=>'alert alert-success'),'success');
	                    $this->redirect(array('controller'=>'Markingschemes','action'=>'index'));
	                }
	                else{
	                    $this->Session->setFlash("Not Updated",'default',array('class'=>'alert alert-danger'),'error');
	                 
	                }
	            }
	        }

	       

}
?>