<?php 

class LinksController extends AppController{

	var $uses = array('Link','SubTopic','Subject','SubjectTopic','Standard');
	function add($id = NULL,$topic_name=NULL,$display_name=NULL){
		$this->layout="ev_admin";
		$subj=$this->Subject->find('all');
		$this->set('subjects',$subj);
			
		$t=$this->SubjectTopic->find('all');
		$this->set('topics',$t);
		$l=$this->SubTopic->findById($id);
		//pr($l);
		//pr($l['SubTopic']['id']);
		//pr($l['SubTopic']['subtopic_name']);
		$subtopicId=$l['SubTopic']['id'];
		$subtopicName=$l['SubTopic']['subtopic_name'];
			$this->set('subtopicId',$subtopicId);
			$this->set('subtopicname',$subtopicName);
			$this->set('dName',$display_name);
			$this->set('topicnames',$topic_name);
			

			if(empty($this->data)){
				$this->data= $this->Link->findById($id);
			}
			else{
				$data=$this->data;
				
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
}