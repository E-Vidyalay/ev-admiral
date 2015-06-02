<?php 

class LinksController extends AppController{

	var $uses = array('Link','Topic','SubTopic');

	public function index(){
		$this->layout="ev_admin";
		$l=$this->Link->find('all');
		$this->set('linkID',$l);
		}

	public function insert(){
		$this->layout="ev_admin";
		$sb=$this->Topic->find('list',array('fields'=>array('id','display_name')));
		$this->set('topic',$sb);
		if($this->request->is('post')){
			$data=$this->data;
			if($this->Link->save($data))
			{	
				$this->Session->setFlash('Link has been successfully added','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Links','action'=>'index'));

			}
			else{
				$this->Session->setFlash('Link has not been added','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('action'=>'index'));
			}
		}

	}
	public function get_sub_topic($id=null){
		$this->layout='ajax';
		if(isset($id)){
			$this->set('if_data',true);
			$sub_topic=$this->SubTopic->find('list',array('fields'=>array('id','name'),'conditions'=>array('topic_id'=>$id)));
			$this->set('sub_topics',$sub_topic);
		}
		else{
			$this->set('if_data',false);
		}
	}
	public function delete($id = NULL){
			pr($id);
			$this->Link->delete($id);
			$this->Session->setFlash('Link has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

	public function update($id=NULL){
		$this->layout="ev_admin";
		$sb=$this->Topic->find('list',array('fields'=>array('id','display_name')));
		$this->set('topic',$sb);
		if(empty($this->data)){
			$this->data=$this->Link->findById($id);
			if(isset($this->data['Link']['sub_topic_id']) || $this->data['Link']['SubTopic']!=null){
						$this->set('has_sbt',true);
						$this->set('sub_topics',$this->SubTopic->find('list',array('conditions'=>array('topic_id'=>$this->data['Link']['topic_id']),'fields'=>array('id','name'))));
					}
					else{
						$this->set('has_sbt',false);
					}
		}
		else{
			if($this->Link->save($this->data))
			{
				$this->Session->setFlash('Link has been successfully updated','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('action'=>'index'));
			}
			else{
				$this->Session->setFlash('Link has not been updated','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('action'=>'index'));
			}
		}
		
	}
}