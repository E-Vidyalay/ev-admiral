<?php
	class NewsLetter extends AppModel{
		public $hasMany=array(
				'Admin'=>array(
					'className'=>'Admin',
					'foreignKey'=>'user_id',
					'dependent'=>true
				)
			);
	}
?>