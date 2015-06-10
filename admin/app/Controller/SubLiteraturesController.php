<?php

class SubLiteraturesController extends AppController{
    public $uses=array('User','Literature','SubLiterature');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('subliteratures',$this->SubLiterature->find('all'));
    }
   public function insert()
    {
        $this->layout='ev_admin';
        $data = $this->Literature->find('list',  array('fields'=>array('id','name')));
        $this->set('literature', $data);
        $userId = $this->Auth->user('id');
        $this->set('user', $userId);
        if($this->request->is('post'))
        {
            $data = $this->data;
           
            if($this->SubLiterature->save($data))
            {
                $this->Session->setFlash('Sub Category added successfully','default',array('class'=>'alert alert-success'),'success');
		        $this->redirect(array('controller'=>'SubLiteratures','action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->SubLiterature->delete($id);
        $this->Session->setFlash('Sub Category has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout='ev_admin';
        $data = $this->Literature->find('list',array('fields'=>array('id','name')));
        $this->set('literature',$data);
        $userId = $this->Auth->user('id');
        $this->set('user',$userId);
        if(empty($this->data))
        {
            $this->data=$this->SubLiterature->findById($id);
        }
        else
        {
            $data=$this->data;
           
            if($this->SubLiterature->save($data))
            {
                $this->Session->setFlash('Sub Category has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
}

