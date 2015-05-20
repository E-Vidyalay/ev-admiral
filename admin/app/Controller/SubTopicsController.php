<?php
	class SubTopicsController extends AppController{
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
			$std=$this->SubjectTopic->find('list',array('fields'=>array('id','tags')));
            $this->set('topic',$std);
			if($this->request->is('post')){
				$data=$this->data;
				$topic=$this->SubjectTopic->findById($data['SubTopic']['subject_topic_id']);
				$data['SubTopic']['tags']=$topic['SubjectTopic']['tags']." , ".$data['SubTopic']['subtopic_name'];
        		if($this->SubTopic->save($data)){
        			$this->Session->setFlash('Sub Topic added successfully','default',array('class'=>'alert alert-success'),'success');
        			$this->redirect(array('controller'=>'SubTopics','action'=>'index'));
        		}
	        	else
	        	{
	        		$this->Session->setFlash('Sub Topic has not been added successfully','default',array('class'=>'alert alert-danger'),'error');	
	        	}
        }
		}

        public function delete($id = NULL){
			$this->SubTopic->delete($id);
			$this->Session->setFlash('Sub Topic has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('action' => 'index'));
		}

		public function update($id = NULL){
			
			$this->layout="ev_admin";
			$std=$this->SubjectTopic->find('list',array('fields'=>array('id','tags')));
            $this->set('topic',$std);
            $this->set('id',$id);
			if(empty($this->data)){
				$this->data= $this->SubTopic->findById($id);
			}
			else{
				$data=$this->data;
				$topic=$this->SubjectTopic->findById($data['SubTopic']['subject_topic_id']);
				$data['SubTopic']['tags']=$topic['SubjectTopic']['tags']." , ".$data['SubTopic']['subtopic_name'];
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