<?php

class Link extends AppModel{
	public $belongsTo=array(

			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',

			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'subtopic_id',

				'dependent'=>true
			)
			
			);	
}
?>
