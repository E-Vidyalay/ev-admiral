<?php 
/**
* 
*/
class ThoughtsController extends AppController
{
	public function index()
	{
        $this->layout='ev_admin';
        $this->set('thoughts',$this->Thought->find('all',array('order' => array('date' => 'DESC'))));
	}
	function delete($id = NULL){
		$this->Thought->delete($id);
		$this->Session->setFlash('Thought has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
		$this->redirect(array('action' => 'index'));
	}
}

?>