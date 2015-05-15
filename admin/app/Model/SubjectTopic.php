<?php

class SubjectTopic extends AppModel{
	public $belongsTo=array(
			'SubjectTopic'=>array(
				'className'=>'SubjectTopic',
				'foreignKey'=>'id',
				'dependent'=>true
			));	
}
?>
