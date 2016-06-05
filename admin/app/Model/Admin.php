<?php
	class Admin extends AppModel{
		public $validate = array(
        'username'=>array(
            'unique'=>array(
                'rule'=>'isUnique'
            )),
        'password'=>array(
        	'between'=>array(
        		'rule'=>array('between',7,25),
        		'message'=>'Password between 8 and 24 chars'))
        );
		public $belongsTo=array(
			'AdminType'=>array(
				'className'=>'AdminType',
				'foreignKey'=>'admin_type',
				'dependent'=>true
			));
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