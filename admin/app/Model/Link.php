<?php
App::uses('File', 'Utility');
App::uses('Folder', 'Utility');
class Link extends AppModel{
	public $belongsTo=array(
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
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
            'url'=>array(
                'rule'=>array('url',true),
                'required' => true,
                'allowEmpty' => false,
                'message'=>'Please enter a valid Video Url'
        )),
        'tags'=>array(
            'rule'=>array('tagRequires'),
            'message'=>"Description can't be empty",
            'required' => true,
            'allowEmpty' => false
        ),
        'link_title'=>array(
            'unique'=>array(
                'rule'=>'isUnique',
                "message" => "Link Title is already exist."
        )),
        'link_url'=>array(
            'unique'=>array(
                'rule'=>'isUnique',
                "message" => "Link is already exist"
        ))
    );
    public $actsAs = array(
        'Upload.Upload' => array(
            'file' => array(
                'fields' => array(
                    'dir' => 'file_dir'
                )
            )
        )
    );
    public function tagRequires($check) {
        // $check will have value: array('promotion_code' => 'some-value')
        // $limit will have value: 25
        $texttostrip = strip_tags($check['tags']);
        if($texttostrip != ""){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
