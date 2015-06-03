
<?php

class SubTopicsController extends AppController{
    public $uses=array('User','SubTopic','Topic','SubTopic');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('subtopics',$this->SubTopic->find('all'));
    }
    public function insert()
    {
        $this->layout='ev_admin';
        $data = $this->Topic->find('list',  array('fields'=>array('id','name')));
        $this->set('topic', $data);
        $userId = $this->Auth->user('id');
        $this->set('user', $userId);
        if($this->request->is('post'))
        {
            $data = $this->data;
           
            if($this->SubTopic->save($data))
            {
                $this->Session->setFlash('SubTopic added successfully','default',array('class'=>'alert alert-success'),'success');
		        $this->redirect(array('controller'=>'SubTopics','action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->SubTopic->delete($id);
        $this->Session->setFlash('SubTopic has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout='ev_admin';
        $data = $this->Topic->find('list',array('fields'=>array('id','name')));
        $this->set('topic',$data);
        $userId = $this->Auth->user('id');
        $this->set('user',$userId);
        if(empty($this->data))
        {
            $this->data=$this->SubTopic->findById($id);
        }
        else
        {
            $data=$this->data;
           
            if($this->SubTopic->save($data))
            {
                $this->Session->setFlash('SubTopic has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
}

