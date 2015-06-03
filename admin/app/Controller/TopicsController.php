<?php

class TopicsController extends AppController{
    public $uses=array('User','Level','Subject','Topic');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('topics',$this->Topic->find('all'));
    }
    public function insert()
    {
        $this->layout='ev_admin';
        $data = $this->Level->find('list',  array('fields'=>array('id','level_name')));
        $this->set('level', $data);
        $data = $this->Subject->find('list',  array('fields'=>array('id','name')));
        $this->set('subject', $data);
        $userId = $this->Auth->user('id');
        $this->set('user', $userId);
        if($this->request->is('post'))
        {
            $data = $this->data;
            $level_name=$this->Level->findById($data['Topic']['level_id']);
            $subject_name=$this->Subject->findById($data['Topic']['subject_id']);
            $display_name=$level_name['Level']['level_name']." - ".$subject_name['Subject']['name']." - ".$data['Topic']['name'];
            $data['Topic']['display_name']=$display_name;
            if($this->Topic->save($data))
            {
                $this->Session->setFlash('Topic added successfully','default',array('class'=>'alert alert-success'),'success');
		$this->redirect(array('controller'=>'topics','action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->Topic->delete($id);
        $this->Session->setFlash('Topic has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout='ev_admin';
        $data = $this->Level->find('list',array('fields'=>array('id','level_name')));
        $this->set('level',$data);
        $data = $this->Subject->find('list',array('fields'=>array('id','name')));
        $this->set('subject',$data);
        $userId = $this->Auth->user('id');
        $this->set('user',$userId);
        if(empty($this->data))
        {
            $this->data=$this->Topic->findById($id);
        }
        else
        {
            $data=$this->data;
            $level_name=$this->Level->findById($data['Topic']['level_id']);
            $subject_name=$this->Subject->findById($data['Topic']['subject_id']);
            $display_name=$level_name['Level']['level_name']." - ".$subject_name['Subject']['name']." - ".$data['Topic']['name'];
            $data['Topic']['display_name']=$display_name;
            if($this->Topic->save($data))
            {
                $this->Session->setFlash('Topic has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
}

