<?php
	class TestStudentMapping extends AppModel{
		public $belongsTo=array(
			'Test'=>array(
				'className'=>'Test',
				'foreignKey'=>'test_id',
				'dependent'=>true
			),
			'Student'=>array(
				'className'=>'Student',
				'foreignKey'=>'student_id',
				'dependent'=>true
			),
			
		);
	}
?>