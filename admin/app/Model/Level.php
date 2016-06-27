<?php

class Level extends AppModel{
	public $validate = array(
	    'level_name'=>array(
	        'unique'=>array(
	            'rule'=>'isUnique',
	            "message" => "Standard is already exist"
	        )));
}
?>
