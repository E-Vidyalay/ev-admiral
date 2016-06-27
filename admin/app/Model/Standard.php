<?php

class Standard extends AppModel{
	public $validate = array(
        'name'=>array(
            'unique'=>array(
                'rule'=>'isUnique',
                "message" => "Standard is already exist"
            )));
	public $belongsTo=array(
			'Level'=>array(
				'className'=>'Level',
				'foreignKey'=>'level_id',
				'dependent'=>true
			));	
}
?>