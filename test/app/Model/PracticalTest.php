<?php
	class PracticalTest extends AppModel{
		public $belongsTo=array(
			'Test'=>array(
				'className'=>'Test',
				'foreignKey'=>'test_id',
				'dependent'=>true,			
			),
			'User'=>array(
				'className'=>'User',
				'foreignKey'=>'updated_by',
				'dependent'=>'true',
			)
		);
	}
?>