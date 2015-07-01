<?php
	class ArticlesController extends AppController{
		public $uses=array('Article','Image');
		public function index() {
	        $articles = $this->Article->find('all',array('conditions'=>array('allow'=>1)),array('order'=>array('Article.title')));
	        $this->set('articles', $articles);
	        $this->layout = 'ev_admin';
	    }
	    public function add(){
	    	$this->layout='ev_question';
	    	$this->set('user_id',$this->Auth->user('id'));
	    	$this->set('images',$this->Image->find('all'));
	    	if($this->request->is('post')){
	    		$article=$this->data;
	    		$article['Article']['alias'] = str_replace(" ","_",strtolower($article['Article']['alias']));
	    		if($this->Article->save($article)){
	    			$this->Session->setFlash('Page added successfully','default',array('class'=>'alert alert-success'),'success');
	    			$this->redirect(array('controller'=>'articles','action'=>'index'));
	    		}
	    		else{
	    			$this->Session->setFlash('Sorry page not saved, please try again','default',array('class'=>'alert alert-danger'),'error');
	    		}
	    	}
	    }
	    public function delete($id){
	    	if($id!=null){
	    		$this->layout='ev_admin';
		    	$this->Article->delete($id);
		    	$this->Session->setFlash('Page deleted successfully','default',array('class'=>'alert alert-success'),'success');
		    	$this->redirect(array('controller'=>'articles','action'=>'index'));
	    	}
	    }
	    public function update($id = NULL){
			$this->layout='ev_question';
			$this->set('images',$this->Image->find('all'));
			if(empty($this->data)){
				$this->data= $this->Article->findById($id);
			}
			else{
				$article=$this->data;
	    		$article['Article']['alias'] = str_replace(" ","_",strtolower($article['Article']['alias']));
				if($this->Article->save($article)){
					$this->Session->setFlash('Page has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'articles','action'=>'index'));
				}
				else{
	    			$this->Session->setFlash('Sorry page not saved, please try again','default',array('class'=>'alert alert-danger'),'error');
	    		}
			}

		}
	}
?>