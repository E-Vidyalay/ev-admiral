<?php 
App::uses('SetSubject','View/Helper');
	class SubTopicsController extends AppController{
		var $helpers=array('SetSubject');
		var $uses = array('SubTopic','Subject','SubjectTopic','Standard');

		public function index($id=NULL){
			$this->layout="ev_admin";
			$sub=$this->SubTopic->find('all');
			$this->set('subtopics',$sub);
			$s=$this->Subject->find('all');
			$this->set('subjects',$s);
			
		}

		public function insert(){
			$this->layout="ev_admin";
			$std=$this->Standard->find('all',array('fields'=>array('id','standard')));
            $this->set('standards',$std);
			if($this->request->is('post')){
        		if($this->SubTopic->save($this->data)){
        			
        		$this->Session->setFlash('Sub Topic added successfully','default',array('class'=>'alert alert-success'),'success');
        		$this->redirect(array('controller'=>'SubjectTopics','action'=>'index'));
        	}
        	else
        	{
        		$this->Session->setFlash('Sub Topic has not been added successfully','default',array('class'=>'alert alert-danger'),'error');	
        	}
        }
		}
		public function list_subject($id=NULL){
            $data=$this->Subject->find('list',array('fields'=>array('id','name'),'conditions'=>array('Subject.standard_id'=>$id)));
            $this->layout='ajax';
            $this->set('subjects',$data);
        }
        public function list_subject_topic($id=NULL){
            $data=$this->SubjectTopic->find('list',array('fields'=>array('id','topic_name'),'conditions'=>array('SubjectTopic.subject_id'=>$id)));
            $this->layout='ajax';
            $this->set('topics',$data);
        }

        public function insert_subtopic(){
        	 $this->layout='ajax';
        	
         }

        public function delete($id = NULL){
			$this->SubTopic->delete($id);
			$this->Session->setFlash('Sub Topic has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		public function update($id = NULL,$topic_name=NULL,$display_name=NULL){
			
			$this->layout="ev_admin";
			$a=$this->SubTopic->findById($id);
			$this->set('subtopics', $a);
			$this->set('dName',$display_name);
			$this->set('topicnames',$topic_name);

			if(empty($this->data)){
				$this->data= $this->SubTopic->findById($id);
			}
			else{
				$data=$this->data;
				
				if($this->SubTopic->save($data))
				{
					$this->Session->setFlash('Sub Topic has been successfully edited','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
				else{
					$this->Session->setFlash('Sub Topic has not been edited','default',array('class'=>'alert alert-error'),'error');
					$this->redirect(array('action'=>'update'));
				}
			}
		}
	}

?>