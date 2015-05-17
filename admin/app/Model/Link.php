<?php

class Link extends AppModel{
	public $belongsTo=array(
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'subtopic_id',
				'dependent'=>true
			)
			
			);	
}
?>
