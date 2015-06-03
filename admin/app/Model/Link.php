<?php

class Link extends AppModel{
	public $belongsTo=array(
<<<<<<< HEAD
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'subtopic_id',
=======
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
>>>>>>> 2296378b767aa1f55eff290c3322e6c29638eef2
				'dependent'=>true
			)
			
			);	
}
?>
