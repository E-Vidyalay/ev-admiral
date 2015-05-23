<?php

class SubTopic extends AppModel{
	public $belongsTo=array(
			'SubjectTopic'=>array(
				'className'=>'SubjectTopic',
				'foreignKey'=>'subject_topic_id',
				'dependent'=>true
			)
			
			);	
}
?>
