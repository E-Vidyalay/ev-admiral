<?php

class Standard extends AppModel{
	public $belongsTo=array(
			'Level'=>array(
				'className'=>'Level',
				'foreignKey'=>'level_id',
				'dependent'=>true
			));	
}
?>