<br/>

<?php
	echo $this->Form->input('subject_topic_id',array(
			'options'=>$topics,
			'label'=>'Topic',
			'class'=>'topic-ls form-control',
			'required',
			'empty'=>'Select Topic'
		));
	
?>