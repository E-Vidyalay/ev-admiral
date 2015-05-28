<?php 
	class Standard extends AppModel{
		public $validate = array(
			'standard'=>array(
				'rule'=>'isUnique',
				'message'=>'Standard already exist'));
	}
?>