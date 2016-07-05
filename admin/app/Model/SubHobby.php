<?php

class SubHobby extends AppModel{
	public $belongsTo=array(
			'Hobby'=>array(
				'className'=>'Hobby',
				'foreignKey'=>'hobby_id',
				'dependent'=>false
			));	

	 public $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule' => 'isUnique',
                'message' => 'This sub category already exists.'
             )
        )
    );

	}
?>
