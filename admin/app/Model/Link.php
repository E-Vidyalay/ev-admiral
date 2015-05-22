<?php

class Link extends AppModel{
	public $belongsTo=array(
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			)
			
			);	
          public $validate = array(
              'link_url'=>array(
                  'rule'=>array('url',true),
                  'message'=>'Please enter a valid website address'
              )
              
              );
}
?>
