<?php
class Subject extends AppModel{
<<<<<<< HEAD
				
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
        
=======
	
}
>>>>>>> aa4bb3a671a3edcec539b5eab4e746a3f3521052
?>
