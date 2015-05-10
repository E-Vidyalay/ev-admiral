<?php 
class StandardsController extends AppController {


	public function  index()
	{
		$this->set('standards',$this->Standard->find('all'));
		$this->layout='ev_admin';
	}

	public function insert()
	{
		$this->layout='ev_admin';
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

	public function update()
	{
		
	}
}
?>