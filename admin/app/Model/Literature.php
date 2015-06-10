<?php

class Literature extends AppModel{
	public $belongsTo=array(
			'Level'=>array(
				'className'=>'Level',
				'foreignKey'=>'level_id',
				'dependent'=>true
			));	

	 public $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule' => 'isUnique',
                'message' => 'This literature already exists.'
             ),
            'rule2'=>array(
                'rule'=>'alphaNumeric',
                 'message'=>'Literature name should contains alphabets only'
            )
        )
    );

	}
?>
