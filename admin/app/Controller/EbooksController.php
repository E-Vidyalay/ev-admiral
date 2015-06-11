<?php
	class EbooksController extends AppController{
		public $uses=array('Literature','Level','SubLiterature','Ebook');
		public function index(){
			$this->layout="ev_admin";
			$l=$this->Ebook->find('all');
			$this->set('books',$l);
		}

		public function insert(){
			$this->layout="ev_admin";
			$sb=$this->SubLiterature->find('all');
			$sl=array();
			foreach ($sb as $key => $value) {
				$sl[$value['SubLiterature']['id']]=$value['Literature']['name']." - ".$value['SubLiterature']['name'];
			}
			$this->set('sl',$sl);
			$this->set('level',$this->Level->find('list',array('fields'=>array('id','level_name'))));
			if($this->request->is('post')){
				$data=$this->data;
				$s=$this->SubLiterature->findById($data['Ebook']['sub_category_id']);
				$data['Ebook']['category_id']=$s['SubLiterature']['literature_id'];
				if($this->Ebook->save($data))
				{	
					$this->Session->setFlash('Ebook has been successfully added','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('controller'=>'ebooks','action'=>'index'));

				}
				else{
					$this->Session->setFlash('Ebook has not been added','default',array('class'=>'alert alert-danger'),'error');
					$this->redirect(array('action'=>'index'));
				}
			}

		}
	        

		
		public function delete($id = NULL){
				$this->Ebook->delete($id);
				$this->Session->setFlash('Ebook has been deleted successfully','default',array('class'=>'alert alert-success'),'success');
				$this->redirect(array('controller'=>'ebooks','action' => 'index'));
			}

		public function update($id=NULL){
			$this->layout="ev_admin";
			$sb=$this->SubLiterature->find('all');
			$sl=array();
			$this->set('level',$this->Level->find('list',array('fields'=>array('id','level_name'))));
			foreach ($sb as $key => $value) {
				$sl[$value['SubLiterature']['id']]=$value['Literature']['name']." - ".$value['SubLiterature']['name'];
			}
			$this->set('sl',$sl);
			if(empty($this->data)){
				$this->data=$this->Ebook->findById($id);
			}
			else{
				$data=$this->data;
				$s=$this->SubLiterature->findById($data['Ebook']['sub_category_id']);
				$data['Ebook']['category_id']=$s['SubLiterature']['literature_id'];
				if($this->Ebook->save($data))
				{
					$this->Session->setFlash('Ebook has been successfully updated','default',array('class'=>'alert alert-success'),'success');
					$this->redirect(array('action'=>'index'));
				}
				else{
					$this->Session->setFlash('Ebook has not been updated','default',array('class'=>'alert alert-danger'),'error');
					$this->redirect(array('action'=>'index'));
				}
			}
			
		}
	}
?>