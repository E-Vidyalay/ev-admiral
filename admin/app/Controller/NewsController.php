<?php 

	class NewsController extends AppController{
		public function index()
		{
			$a=$this->New->find('all');
			pr($a);
			$this->set('news',$a);
			$this->layout='ev_admin';
		}

		public function insert()
		{
			$this->layout='ev_admin';
			if($this->request->is('post'))
			{
				pr($this->data);
				if($this->New->save($this->data))
				{
					$this->Session->setFlash('News added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'news','action'=>'index'));
				}
			}
		}

		function delete($id = NULL){
			$this->New->delete($id);
			$this->Session->setFlash('News has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			if(empty($this->data)){
				$this->data= $this->New->findById($id);
			}
			else{
				if($this->New->save($this->data)){
					$this->Session->setFlash('News has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

	}
?>