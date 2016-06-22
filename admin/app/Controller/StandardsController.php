<?php 

	class StandardsController extends AppController{
		public $uses=array('User','Level','Standard');
		public function index()
		{
                    $this->layout='ev_admin';
                    $this->set('standards',$this->Standard->find('all'));
		}

		public function insert()
		{
			$this->layout='ev_admin';
			$data = $this->Level->find('list',  array('fields'=>array('id','level_name')));
        	$this->set('levels', $data);
			if($this->Auth->user('AdminType.name')=='Administrator'){
				if($this->request->is('post'))
				{
					$data=$this->data;
					if($this->Standard->save($data))
					{
						$this->Session->setFlash('Standard added successfully','default',array('class'=>'alert alert-success'),'success');
						$this->redirect(array('controller'=>'standards','action'=>'index'));
					}
				}
			}
			else{
				$this->Session->setFlash('You are not Allow to access this Location.', 'default', array('class' => 'alert alert-danger') , 'error');
				$this->redirect(array('controller'=>'standards','action'=>'index'));
			}
		}

		function delete($id = NULL){
			$this->Standard->delete($id);
			$this->Session->setFlash('Level has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			$data = $this->Level->find('list',  array('fields'=>array('id','level_name')));
        	$this->set('levels', $data);
			if(empty($this->data)){
				$this->data= $this->Standard->findById($id);
			}
			else{
				$data=$this->data;
				if($this->Standard->save($data)){
					$this->Session->setFlash('Standard has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

	}
?>