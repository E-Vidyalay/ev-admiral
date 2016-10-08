<?php 
App::import('Vendor', 'Spreadsheet_Excel_Reader', array('file' => 'excelreader/reader.php'));
class LinksController extends AppController{

	var $uses = array('Link','Topic','SubTopic');

	public function index(){
		$this->layout="ev_admin";
		$l=$this->Link->find('all',array('conditions'=>array('allow'=>1)));
		$this->set('linkID',$l);
	}
	public function insert(){
		$this->layout="ev_question";
		$this->set('user_id',$this->Auth->user('id'));
		$sb=$this->Topic->find('list',array('fields'=>array('id','display_name')));
		$this->set('topic',$sb);
		if($this->request->is('post')){
			$data=$this->data;
			// pr($data);
			// die();
			if($this->Link->save($data))
			{	
				$this->Session->setFlash('Link has been successfully added','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'Links','action'=>'index'));

			}
			else{
				$this->Session->setFlash('Link has not been added due to some error please try later with appropriate data.','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('action'=>'index'));
			}
		}

	}
        

	public function multiple_insert(){
		$this->layout="ev_question";
        // $this->loadModel('File');
        if($this->request->is('post')){
            $data=$this->data;
            // $topic_id = $this->request->data['Link']['topic_id'];
            // $sub_topic_id = $this->request->data['Link']['sub_topic_id'];
            $file=$this->data['Link']['file'];
            // pr(DS.WEBROOT_DIR.DS.'link'.DS.$this->data['Link']['file']['name']);die;
            $filePath=WWW_ROOT.'files'.DS.'link'.DS.$this->data['Link']['file']['name'];
            move_uploaded_file($this->data['Link']['file']['tmp_name'],$filePath);
            $extension_name=pathinfo($filePath);
            // pr($extension_name['extension']);
            // die();
            if($extension_name!=='csv'){
            	$this->Session->setFlash('File Extension is not CSV','default',array('class'=>'alert alert-danger'),'error');
            	$this->redirect(array('controller'=>'links','action' => 'index'));
            }
			$handle = fopen($filePath, 'r');
			$c = 0;
			$link=array();
			$link_array=array();
			$uploaded_by=$this->Auth->user('id');
			$t=$this->Topic->find('all',array('fields'=>array('id','name')));
			while(($filesop = fgetcsv($handle)) !== false)
			{
				$link_url = $filesop[0];
				$link_title = $filesop[1];
				$tags = $filesop[2];
				for($x=0;$x<count($t);$x++){
					// pr($filesop[3]);
					if($t[$x]['Topic']['name']===$filesop[4]){
						$topic_id=$t[$x]['Topic']['id'];
						$sbt=$this->SubTopic->find('all');
						$sub_topic_id=NULL;
						if($filesop[5]!==NULL){
							for($y=0;$y<count($sbt);$y++){
								if($sbt[$y]['SubTopic']['name']===$filesop[5] && $sbt[$y]['Topic']['id'] === $topic_id){
									$sub_topic_id=$sbt[$y]['SubTopic']['id'];
								}	
							}
						}
						else{
							$sub_topic_id=NULL;
						}
						$link['Link']=array();
						$link['Link']['uploaded_by']=$uploaded_by;
						$link['Link']['link_url']=$link_url;
						$link['Link']['link_title']=$link_title;
						$link['Link']['tags']=$tags;
						$link['Link']['topic_id']=$topic_id;
						$link['Link']['sub_topic_id']=$sub_topic_id;
						$link['Link']['allow']=1;
						array_push($link_array,$link);
						$c = $c + 1;
					}
				}
			}
			// pr($c);
			// pr($link_array);
			if($this->Link->saveAll($link_array)){
				$this->Session->setFlash($c.'Links has been successfully added','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'links','action' => 'index'));
			}
			else{
				$this->Session->setFlash('Link has not been added due to some error in validations.','default',array('class'=>'alert alert-danger'),'error');
				$this->redirect(array('controller'=>'links','action' => 'multiple_insert'));
				// debug($this->Link->validationErrors);
				// die();
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
			$this->Link->delete($id);
			$this->Session->setFlash('Link has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
			$this->redirect(array('controller'=>'links','action' => 'index'));
		}

	public function update($id=NULL){
		$this->layout="ev_question";
		$sb=$this->Topic->find('list',array('fields'=>array('id','display_name')));
		$this->set('topic',$sb);
		if(empty($this->data)){
			$this->data=$this->Link->findById($id);
			if(isset($this->data['Link']['sub_topic_id']) || $this->data['Link']['sub_topic_id']!=null){
						$this->set('has_sbt',true);
						$this->set('sub_topics',$this->SubTopic->find('list',array('conditions'=>array('topic_id'=>$this->data['Link']['topic_id']),'fields'=>array('id','name'))));
					}
					else{
						$this->set('has_sbt',false);
					}
		}
		if($this->request->is('post')){
			if(isset($this->data['Link']['sub_topic_id']) || $this->data['Link']['sub_topic_id']!=null){
				$this->set('has_sbt',true);
				$this->set('sub_topics',$this->SubTopic->find('list',array('conditions'=>array('topic_id'=>$this->data['Link']['topic_id']),'fields'=>array('id','name'))));
			}
			else{
				$this->set('has_sbt',false);
			}
			if($this->Link->save($this->data))
			{
				$this->Session->setFlash('Link has been successfully updated','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('action'=>'index'));
			}
		}
	}
	function delete_all($array=NULL){
        $dataArray=json_decode($array,true);
        foreach($dataArray as $key => $value)
        {
            // pr($value);
            $this->Link->delete($value);
        }
    }
}