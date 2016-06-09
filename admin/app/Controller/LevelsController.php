<?php 

	class LevelsController extends AppController{
		public $uses=array('User','Level');
		public function index()
		{
                    $this->layout='ev_admin';
                    $this->set('levels',$this->Level->find('all'));
		}

		public function insert()
		{
			$this->layout='ev_admin';
			if($this->Auth->user('AdminType.name')=='Administrator'){
				if($this->request->is('post'))
				{
					$data=$this->data;
					if($this->Level->save($data))
					{
						$this->Session->setFlash('Level added successfully','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'levels','action'=>'index'));
					}
				}
			}
			else{
				$this->Session->setFlash('You are not Allow to access this Location.', 'default', array('class' => 'alert alert-danger') , 'error');
				$this->redirect(array('controller'=>'levels','action'=>'index'));
			}
		}

		function delete($id = NULL){
			$this->Level->delete($id);
			$this->Session->setFlash('Level has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			if(empty($this->data)){
				$this->data= $this->Level->findById($id);
			}
			else{
				$data=$this->data;
				if($this->Level->save($data)){
					$this->Session->setFlash('Level has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

	}
?>