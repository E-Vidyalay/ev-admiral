<?php
	class TestQuestionStudentMapping extends AppModel{
		public $belongsTo=array(
			'Test'=>array(
				'className'=>'Test',
				'foreignKey'=>'test_id',
				'dependent'=>true
			),
			'QuestionBank'=>array(
				'className'=>'QuestionBank',
				'foreignKey'=>'question_id',
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