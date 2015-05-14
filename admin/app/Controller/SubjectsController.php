<?php 

	class SubjectsController extends AppController{
		public $uses=array('User','Standard','Subject');
		public function index()
		{
                    $this->layout='ev_admin';
                    $this->set('subjects',$this->Subject->find('all'));
		}

		public function insert()
		{
			$this->layout='ev_admin';
			$data = $this->Standard->find('list', array('fields' => array('id','standard')));
			$this->set('stand', $data);
			$userId = $this->Auth->user('id');
			$this->set('user',$userId);
			if($this->request->is('post'))
			{
				$data=$this->data;
				$standard=$this->Standard->findById($data['Subject']['standard_id']);
				$data['Subject']['display_name']=$standard['Standard']['standard']."th ".$data['Subject']['name'];
				if($this->Subject->save($data))
				{
					$this->Session->setFlash('Subject added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'subjects','action'=>'index'));
				}
			}
		}

		function delete($id = NULL){
			$this->Subject->delete($id);
			$this->Session->setFlash('Subject has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			$data = $this->Standard->find('list', array('fields' => array('id','standard')));
			$this->set('stand', $data);
			$userId = $this->Auth->user('id');
			$this->set('user',$userId);
			if(empty($this->data)){
				$this->data= $this->Subject->findById($id);
			}
			else{
				$data=$this->data;
				$standard=$this->Standard->findById($data['Subject']['standard_id']);
				$data['Subject']['display_name']=$standard['Standard']['standard']."th ".$data['Subject']['name'];
				if($this->Subject->save($data)){
					$this->Session->setFlash('Subject has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

		function insert_topic(){
			$this->layout="ev_admin";
			$data=$this->data->Standard->find('list',array('fields' => array('id','sttandard')));
			$this->set('stand',$data);
			$userId=$this->Auth->user('id');
			$this->set('user',$userId);
			if($this->request->is('post')){
				$data=$this->data;
			}
		}

	}
?>