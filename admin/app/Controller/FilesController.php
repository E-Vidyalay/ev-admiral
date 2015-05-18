<?php 

class LinksController extends AppController{

	var $uses = array('Link','SubTopic','Subject','SubjectTopic','Standard');
	function add($id = NULL,$topic_name=NULL,$display_name=NULL){
		$this->layout="ev_admin";
		$subj=$this->Subject->find('all');
		$this->set('subjects',$subj);
			
		$t=$this->SubjectTopic->find('all');
		$this->set('topics',$t);
		$l=$this->SubTopic->find('list',array('fields'=>array('id','subtopic_name'),'conditions'=>array('SubTopic.id'=>$id)));
		//pr($l);
			$this->set('subtopic',$l);
			$this->set('dName',$display_name);
			$this->set('topicnames',$topic_name);
			
			//pr($this->data);
		/*	if(empty($this->data)){
				
				$this->data= $this->Link->findById($id);

			}
			else{
				$data=$this->data;*/
				if($this->request->is('post')){
				
				if($this->Link->save($this->data))
				{	
					$this->Session->setFlash('Link has been successfully added','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'SubTopics','action'=>'index',$id));

				}
				else{
					$this->Session->setFlash('Link has not been added','default',array('class'=>'alert alert-error'),'error');
					$this->redirect(array('action'=>'add'));
				}}
			//}

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