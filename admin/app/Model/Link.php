<?php

class Link extends AppModel{
	public $belongsTo=array(
<<<<<<< HEAD
<<<<<<< HEAD
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'subtopic_id',
=======
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
>>>>>>> 2296378b767aa1f55eff290c3322e6c29638eef2
=======
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
>>>>>>> 06aaf9d080e18b4da2aca721a2d2e4f44551a480
				'dependent'=>true
			),
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'sub_topic_id',
				'dependent'=>false
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
