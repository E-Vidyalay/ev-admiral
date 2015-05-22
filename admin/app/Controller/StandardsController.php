<?php 

	class StandardsController extends AppController{
		public function index()
		{
			$this->set('standards',$this->Standard->find('all'));
			$this->layout='ev_admin';
		}

		public function insert()
		{
                        
                        
			$this->layout='ev_admin';
                        /*$sections=array('primary','secondary');
                        $this->set('section_values',$sections*/
			if($this->request->is('post'))
			{
				pr($this->data);
				if($this->Standard->save($this->data))
				{
					$this->Session->setFlash('Standard added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'standards','action'=>'index'));
				}
			}
		}

		function delete($id = NULL){
			$this->Standard->delete($id);
			$this->Session->setFlash('Standard has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			if(empty($this->data)){
				$this->data= $this->Standard->findById($id);
			}
			else{
				if($this->Standard->save($this->data)){
					$this->Session->setFlash('Standard has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

	}
?>