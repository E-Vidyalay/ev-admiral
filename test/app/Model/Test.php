<?php
	class Test extends AppModel{
		public $belongsTo=array(
			'Subject'=>array(
				'className'=>'Subject',
				'foreignKey'=>'subject_id',
				'dependent'=>true
			),
			'Markingscheme'=>array(
				'className'=>'Markingscheme',
				'foreignKey'=>'marking_scheme_id',
				'dependent'=>true
			),
		
		);
	}
?>