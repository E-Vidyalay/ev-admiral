<?php
	class InformationPost extends AppModel{
	public $belongsTo=array(
				'Admin'=>array(
	                    'className'=>'Admin',
	                    'foreignKey'=>'updated_by',
	                    'dependent'=>true
	            )
			);

	}
?>