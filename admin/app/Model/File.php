<?php

class File extends AppModel{
	public $actsAs = array(
			'Upload.Upload'=>array(
				'file'=>array(
					'fields'=>array(
						'dir' => 'file_dir'))));
	public $belongsTo=array(
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'subtopic_id',
				'dependent'=>true
			));	
}
?>
