<?php

class File extends AppModel{
	public $actsAs = array(
			'Upload.Upload'=>array(
				'file'=>array(
					'fields'=>array(
						'dir' => 'file_dir'))));
	public $belongsTo=array(
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			));	
}
?>
