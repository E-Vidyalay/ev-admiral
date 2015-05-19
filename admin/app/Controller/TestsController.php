<?php
class TestsController extends AppController{

	public function index()
	{
		$a=$this->Test->find('all');
		$this->set('tests', $a);
		pr($a);
		$this->layout='ev_admin';
	}

	public function insert()
		{
			$this->layout='ev_admin';
			if($this->request->is('post'))
			{
				pr($this->data);
				if($this->Test->save($this->data))
				{
					$this->Session->setFlash('Test added successfully','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'tests','action'=>'index'));
				}
			}
		}

		function update($id = NULL){
			$this->layout='ev_admin';
			if(empty($this->data)){
				$this->data= $this->Test->findById($id);
			}
			else{
				if($this->Test->save($this->data)){
					$this->Session->setFlash('Test has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
			}

		}

		function delete($id = NULL){
			$this->Test->delete($id);
			$this->Session->setFlash('Test has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

} 
?>