<?php
	class PracticalStudentTestMapping extends AppModel{
		public $belongsTo=array(
			'PraticalTest'=>array(
				'className'=>'PracticalTest',
				'foreignKey'=>'prac_id',
				'depentdent'=>'true'
			),
			'User'=>array(
				'className'=>'User',
				'foreignKey'=>'updated_by',
				'depentdent'=>'true'
			),
			'Student'=>array(
				'className'=>'Student',
				'foreignKey'=>'student_id',
				'depentdent'=>'true'
			)
		);
	}
?>