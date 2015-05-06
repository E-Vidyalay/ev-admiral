<?php
	App::uses('CakeEmail', 'Network/Email');
	class Student extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('path'=>array('fields'=>array('dir'=>'path_dir'))));
		public function beforeSave($options = array()) {
			// hash our password
			if (isset($this->data[$this->alias]['password'])) {
				$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
			}
			
			// if we get a new password, hash it
			if (isset($this->data[$this->alias]['password_update'])) {
				$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password_update']);
			}
		
			// fallback to our parent
			return parent::beforeSave($options);
		}
	}
?>