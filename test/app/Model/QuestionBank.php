<?php
	class QuestionBank extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('path'=>array('fields'=>array('dir'=>'path_dir'))));
		public $belongsTo=array(
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			),
			
		);
	}
?>