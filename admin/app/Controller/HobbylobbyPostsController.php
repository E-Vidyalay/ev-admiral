<?php

class HobbylobbyPostsController extends AppController{
    public $uses=array('User','Hobby','Level','SubHobby','HobbylobbyPost','Image');
    public function index()
    {
        $this->layout='ev_admin';
        $this->set('hobbylobbypost',$this->HobbylobbyPost->find('all'));
    }
   public function insert()
    {
        $this->layout="ev_question";
        $this->set('user_id',$this->Auth->user('id'));
        $sb=$this->SubHobby->find('all');
        $sl=array();
        foreach ($sb as $key => $value) {
            $sl[$value['SubHobby']['id']]=$value['Hobby']['name']." - ".$value['SubHobby']['name'];
        }
        $this->set('sl',$sl);
        $this->set('images',$this->Image->find('all'));
        $this->set('level',$this->Level->find('list',array('fields'=>array('id','level_name'))));
        if($this->request->is('post')){
            $data=$this->data;
            $s=$this->SubHobby->findById($data['HobbylobbyPost']['sub_hobby_id']);
            $data['HobbylobbyPost']['hobby_id']=$s['SubHobby']['hobby_id'];
            //pr($this->data);die();
            if($this->HobbylobbyPost->save($data))
            {   
                $this->Session->setFlash('HobbylobbyPost has been successfully added','default',array('class'=>'alert alert-success'),'success');
                $this->redirect(array('controller'=>'HobbylobbyPosts','action'=>'index'));
            }
            else{
                $this->Session->setFlash('HobbylobbyPost has not been added','default',array('class'=>'alert alert-danger'),'error');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
    
    function delete($id=NULL)
    {
        $this->HobbylobbyPost->delete($id);
        $this->Session->setFlash('HobbylobbyPost has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
        $this->redirect(array('action' => 'index'));
    }
    function update($id=NULL){
        $this->layout="ev_question";
        $this->set('user_id',$this->Auth->user('id'));
            $sb=$this->SubHobby->find('all');
            $sl=array();
            $this->set('level',$this->Level->find('list',array('fields'=>array('id','level_name'))));
            foreach ($sb as $key => $value) {
                $sl[$value['SubHobby']['id']]=$value['Hobby']['name']." - ".$value['SubHobby']['name'];
            }
            $this->set('sl',$sl);
            $this->set('images',$this->Image->find('all'));
            if(empty($this->data)){
                $this->data=$this->HobbylobbyPost->findById($id);
            }
            else{
                $data=$this->data;
                $s=$this->SubHobby->findById($data['HobbylobbyPost']['sub_hobby_id']);
                $data['HobbylobbyPost']['hobby_id']=$s['SubHobby']['hobby_id'];
                if($this->HobbylobbyPost->save($data))
                {
                    $this->Session->setFlash('Hobby Lobby Post has been successfully updated','default',array('class'=>'alert alert-success'),'success');
                    $this->redirect(array('action'=>'index'));
                }
                else{
                    $this->Session->setFlash('Hobby Lobby Post has not been updated','default',array('class'=>'alert alert-danger'),'error');
                    $this->redirect(array('action'=>'index'));
                }
            }
    }
    public function view_posts($id){
        $this->layout="ev_admin";
        $this->set('posts',$this->HobbylobbyPost->findById($id));
    }
        
    function delete_all($array=NULL){
        $dataArray=json_decode($array,true);
        foreach($dataArray as $key => $value)
        {
            // pr($value);
            $this->HobbylobbyPost->delete($value);
        }
    }
    
}

