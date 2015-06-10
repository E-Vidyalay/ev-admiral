<?php

class SubLiterature extends AppModel{
	public $belongsTo=array(
			'Literature'=>array(
				'className'=>'Literature',
				'foreignKey'=>'literature_id',
				'dependent'=>true
			));	

	 public $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule' => 'isUnique',
                'message' => 'This sub category already exists.'
             ),
            'rule2'=>array(
                'rule'=>'alphaNumeric',
                 'message'=>'Sub category name should contains alphabets only'
            )
        )
    );

	}
?>
