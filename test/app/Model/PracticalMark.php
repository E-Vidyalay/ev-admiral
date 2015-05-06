<?php
	class PracticalMark extends AppModel{
		public $belongsTo=array(
			'PracticalTest'=>array(
				'className'=>'PracticalTest',
				'foreignKey'=>'prac_id',
				'dependent'=>'true',
			),
			'Student'=>array(
				'className'=>'Student',
				'foreignKey'=>'student_id',
				'dependent'=>'true',
			),
			'User'=>array(
				'className'=>'User',
				'foreignKey'=>'updated_by',
				'dependent'=>'true',
			)
		);
	}
?>