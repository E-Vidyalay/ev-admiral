<?php 

class LinksController extends AppController{

	var $uses = array('Link','SubTopic','Subject','SubjectTopic','Standard');
	function add($id = NULL,$topic_name=NULL,$display_name=NULL){
		$this->layout="ev_admin";
		$sb=$this->SubTopic->findById($id);
		$this->set('sub_topic',$sb);
		$this->set('topic_name',$topic_name);
		$this->set('sub_name',$display_name);
		if($this->request->is('post')){
			$data=$this->data;
			$data['Link']['tags']=$data['Link']['display_name']." -> ".$data['Link']['topic_name']." -> ".$data['Link']['subtopic_name'];
			if($this->Link->save($data))
			{	
				$this->Session->setFlash('Link has been successfully added','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'SubTopics','action'=>'index'));

			}
			else{
				$this->Session->setFlash('Link has not been added','default',array('class'=>'alert alert-error'),'error');
				$this->redirect(array('action'=>'add'));
			}
		}

	}

	function view($id = NULL,$topic_name=NULL){
		$this->layout="ev_admin";
		$t=$this->SubjectTopic->find('all');
		$this->set('topics',$t);
		$l=$this->SubTopic->find('list',array('fields'=>array('id','subtopic_name'),'conditions'=>array('SubTopic.id'=>$id)));
		
			$this->set('subtopic',$l);
			//$this->set('dName',$display_name);
			$this->set('topicnames',$topic_name);


			

	}

}