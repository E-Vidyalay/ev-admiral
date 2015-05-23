function insert($id = NULL,$topic_name=NULL,$display_name=NULL){
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
				$this->redirect(array('controller'=>'Links','action'=>'index'));

			}
			else{
				$this->Session->setFlash('Link has not been added','default',array('class'=>'alert alert-error'),'error');
				$this->redirect(array('action'=>'index'));
			}
		}