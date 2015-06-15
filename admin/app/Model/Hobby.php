<?php

class Hobby extends AppModel{
    public $belongsTo=array(
            'Level'=>array(
                'className'=>'Level',
                'foreignKey'=>'level_id',
                'dependent'=>false
            )); 

	 public $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule' => 'isUnique',
                'message' => 'This hobby already exists.'
             ),
            'rule2'=>array(
                'rule'=>'alphaNumeric',
                 'message'=>'Hobby name should contains alphabets only'
            )
        )
    );

	}
?>
