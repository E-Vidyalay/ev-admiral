<?php
class Subject extends AppModel{
	public $validate = array(
        'name'=>array(
            'unique'=>array(
                'rule'=>'isUnique',
                "message" => "Standard is already exist"
            )));
}
?>
