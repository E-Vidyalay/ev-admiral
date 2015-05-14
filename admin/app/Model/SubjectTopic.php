<?php

class SubjectTopic extends AppModel{
	public $belongsTo=array(
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			));	
}
?>
