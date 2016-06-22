<?php 
	class QuestionBank extends AppModel{
		public $belongsTo=array(
			'Standard'=>array(
				'className'=>'Standard',
				'foreignKey'=>'standard_id',
				'dependent'=>true
			),
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
				'dependent'=>true
			),
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'sub_topic_id',
				'dependent'=>false
			),
			'Markingscheme'=>array(
				'className'=>'Markingscheme',
				'foreignKey'=>'markingscheme_id',
				'dependent'=>true
			)
			);	
	}
?>