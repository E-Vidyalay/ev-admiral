<?php

class Link extends AppModel{
	public $belongsTo=array(
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
				'dependent'=>true
			)
			
			);	
          // public $validate = array(
          //     'link_url'=>array(
          //         'rule'=>array('url',true),
          //         'message'=>'Please enter a valid website address'
          //     )
              
          //     );
}
?>
