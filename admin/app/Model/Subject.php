<?php

class Subject extends AppModel{
	public $belongsTo=array(
			'Standard'=>array(
				'className'=>'Standard',
				'foreignKey'=>'standard_id',
				'dependent'=>true
			));
?>
