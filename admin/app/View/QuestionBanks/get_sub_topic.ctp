<?php
	if($if_data){
		echo $this->Form->input('sub_topic_id',array('type'=>'select','empty'=>'Select sub topic','div'=>false,'label'=>'Does this question belong to any of the following sub topic?','class'=>'form-control','options'=>$sub_topics));
	}
	else{
		echo $this->Form->input('sub_topic_id',array('type'=>'select','empty'=>'Select sub topic','div'=>false,'label'=>'Does this question belong to any of the following sub topic?','class'=>'form-control'));
	}
?>