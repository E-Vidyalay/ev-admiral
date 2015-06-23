<?php
    class InformationPostsController extends AppController{
        public $uses=array('InformationPost');
        public function index(){
            $this->layout="ev_admin";
            $i=$this->InformationPost->find('all');
            $this->set('Ipost',$i);
        }

       public function insert(){
            $this->layout="ev_question";
            $userId = $this->Auth->user('id');
            $this->set('user', $userId);
            //$this->set('info',$this->Information->find('list',array('fields'=>array('id','name'))));
            
            if($this->request->is('post')){
                $data=$this->data;
                
                if($this->InformationPost->save($data))
                {   
                    $this->Session->setFlash('Post has been successfully added','default',array('class'=>'alert alert-success'),'success');
                    $this->redirect(array('controller'=>'InformationPosts','action'=>'index'));

                }
                else{
                    $this->Session->setFlash('Post has not been added','default',array('class'=>'alert alert-danger'),'error');
                    $this->redirect(array('action'=>'index'));
                }
            }

        }


        public function delete($id=null){
                $this->layout='ev_admin';
                $this->InformationPost->delete($id);      
                $this->Session->setFlash("Post deleted successfully.",'default',array('class'=>'alert alert-success'),'success');                   
                $this->redirect(array('controller'=>'InformationPosts','action'=>'index'));
        }

        function update($id=NULL){
            $this->layout='ev_question';
            $userId = $this->Auth->user('id');
            $this->set('user',$userId);
            if(empty($this->data))
            {
                $this->data=$this->InformationPost->findById($id);
            }
            else
            {
                $data=$this->data;
                if($this->InformationPost->save($data))
                {
                    $this->Session->setFlash('Post has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
         public function view_posts($id){
            $this->layout="ev_admin";
            $this->set('posts',$this->InformationPost->findById($id));
        }
   
    }
?>