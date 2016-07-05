<?php

class SubTopic extends AppModel{
	public $belongsTo=array(
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
				'dependent'=>true
			));	

	 public $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule' => 'isUnique',
                'message' => 'This subtopic already exists.'
             )
        )
    );

	}
?>
