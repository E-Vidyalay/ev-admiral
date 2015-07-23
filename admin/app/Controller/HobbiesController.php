<?php

class HobbiesController extends AppController{
    public $uses=array('User','Hobby','Level');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('hobbies',$this->Hobby->find('all'));
    }
   public function insert()
    {
        $this->layout='ev_admin';
        $userId = $this->Auth->user('id');
        $this->set('user', $userId);
        $this->set('level', $data);

        if($this->request->is('post'))
        {
            $data = $this->data;
            $level_name=$this->Level->findById($data['Hobby']['level_id']);

            if($this->Hobby->save($data))
            {
                $this->Session->setFlash('Hobby added successfully','default',array('class'=>'alert alert-success'),'success');
		        $this->redirect(array('controller'=>'Hobbies','action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->Hobby->delete($id);
        $this->Session->setFlash('Hobby has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout='ev_admin';
        $this->set('level',$data);
        $userId = $this->Auth->user('id');
        $this->set('user',$userId);
        if(empty($this->data))
        {
            $this->data=$this->Hobby->findById($id);
        }
        else
        {
            $data=$this->data;
            $level_name=$this->Level->findById($data['Hobby']['level_id']);
           
            if($this->Hobby->save($data))
            {
                $this->Session->setFlash('Hobby has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
}

