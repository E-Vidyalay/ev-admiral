<?php

class Subject extends AppModel{
	public $belongsTo=array(
			'Standard'=>array(
				'className'=>'Standard',
				'foreignKey'=>'standard_id',
				'dependent'=>true
			));	
        public $validate = array(
        'name' => array(
            'rule1'=>array(
                'rule' => 'isUnique',
                'message' => 'This subject already exists.'
             ),
            'rule2'=>array(
                'rule'=>'/^[A-Za-z][A-Za-z]{4,31}$/i',
                 'message'=>'Subject name should contains alphabets only.Minimum 5'
            )
        )
    );
       
	}
        
?>
