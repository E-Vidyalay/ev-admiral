<?php
    class LiteraturePostsController extends AppController{
        public $uses=array('Literature','LiteraturePost','SubLiterature','Level');
        public function index(){
            $this->layout="ev_admin";
            $l=$this->LiteraturePost->find('all');
            $this->set('lpost',$l);
        }

       public function insert(){
            $this->layout="ev_question";
            $userId = $this->Auth->user('id');
            $this->set('user', $userId);
            $lp=$this->SubLiterature->find('all');
            $this->set('levels',$this->Level->find('list',array('fields'=>array('id','level_name'))));
            $a=array();
            foreach ($lp as $key => $value) {
                $a[$value['SubLiterature']['id']]=$value['Literature']['name']." - ".$value['SubLiterature']['name'];
            }
            $this->set('lp',$a);
            $this->set('lt',$this->Literature->find('list',array('fields'=>array('id','name'))));
            
            if($this->request->is('post')){
                $data=$this->data;
                $s=$this->SubLiterature->findById($data['LiteraturePost']['sub_literature_id']);
                $data['LiteraturePost']['literature_id']=$s['SubLiterature']['literature_id'];
                if($this->LiteraturePost->save($data))
                {   
                    $this->Session->setFlash('Article has been successfully added','default',array('class'=>'alert alert-success'),'success');
                    $this->redirect(array('controller'=>'LiteraturePosts','action'=>'index'));

                }
                else{
                    $this->Session->setFlash('Article has not been added','default',array('class'=>'alert alert-danger'),'error');
                    $this->redirect(array('action'=>'index'));
                }
            }

        }


        public function delete($id=null){
                $this->layout='ev_admin';
                $this->LiteraturePost->delete($id);      
                $this->Session->setFlash("Article deleted successfully.",'default',array('class'=>'alert alert-success'),'success');                   
                $this->redirect(array('controller'=>'LiteraturePosts','action'=>'index'));
        }

        function update($id=NULL){
            $this->layout='ev_question';
            $userId = $this->Auth->user('id');
            $this->set('user',$userId);
            $level=$this->Level->find('list',array('fields'=>array('id','level_name')));
            $this->set('levels',$level);
            $sb=$this->SubLiterature->find('all');
            foreach ($sb as $key => $value) {
                $sl[$value['SubLiterature']['id']]=$value['Literature']['name']." - ".$value['SubLiterature']['name'];
            }
            $this->set('sl',$sl);

            if(empty($this->data))
            {
                $this->data=$this->LiteraturePost->findById($id);
            }
            else
            {
                $data=$this->data;
                $s=$this->SubLiterature->findById($data['LiteraturePost']['sub_literature_id']);
                $data['LiteraturePost']['literature_id']=$s['SubLiterature']['literature_id'];
                if($this->LiteraturePost->save($data))
                {
                    $this->Session->setFlash('Article has been successfully edited','default',array('class'=>'alert alert-success'),'success');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
         public function view_posts($id){
            $this->layout="ev_admin";
            $this->set('posts',$this->LiteraturePost->findById($id));
        }
   
    }
?>