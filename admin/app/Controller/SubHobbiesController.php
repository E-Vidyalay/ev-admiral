<?php

class SubHobbiesController extends AppController{
    public $uses=array('User','Hobby','SubHobby');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('subhobbies',$this->SubHobby->find('all'));
    }
   public function insert()
    {
        $this->layout='ev_admin';
        $data = $this->Hobby->find('list',  array('fields'=>array('id','name')));
        $this->set('hobby', $data);
        $userId = $this->Auth->user('id');
        $this->set('user', $userId);
        if($this->request->is('post'))
        {
            $data = $this->data;
           
            if($this->SubHobby->save($data))
            {
                $this->Session->setFlash('Sub Category added successfully','default',array('class'=>'alert alert-success'),'success');
		        $this->redirect(array('controller'=>'SubHobbies','action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->SubHobby->delete($id);
        $this->Session->setFlash('Sub Category has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout='ev_admin';
        $data = $this->Hobby->find('list',array('fields'=>array('id','name')));
        $this->set('hobby',$data);
        $userId = $this->Auth->user('id');
        $this->set('user',$userId);
        if(empty($this->data))
        {
            $this->data=$this->SubHobby->findById($id);
        }
        else
        {
            $data=$this->data;
           
            if($this->SubHobby->save($data))
            {
                $this->Session->setFlash('Sub Category has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
}

