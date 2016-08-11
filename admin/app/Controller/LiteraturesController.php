<?php

class LiteraturesController extends AppController{
    public $uses=array('User','Literature','Level');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('literatures',$this->Literature->find('all'));
    }
   public function insert()
    {
        $this->layout='ev_admin';
        $userId = $this->Auth->user('id');
        $this->set('user', $userId);
        if($this->request->is('post'))
        {
            $data = $this->data;
           
            if($this->Literature->save($data))
            {
                $this->Session->setFlash('Literature added successfully','default',array('class'=>'alert alert-success'),'success');
		        $this->redirect(array('controller'=>'Literatures','action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->Literature->delete($id);
        $this->Session->setFlash('Literature has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout='ev_admin';
        $userId = $this->Auth->user('id');
        $this->set('user',$userId);
        if(empty($this->data))
        {
            $this->data=$this->Literature->findById($id);
        }
        else
        {
            $data=$this->data;
           
            if($this->Literature->save($data))
            {
                $this->Session->setFlash('Literature has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
}

