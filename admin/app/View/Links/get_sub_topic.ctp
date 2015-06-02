<?php
	if($if_data){
		echo $this->Form->input('sub_topic_id',array('type'=>'select','empty'=>'Select Sub topic','div'=>false,'label'=>'Sub Topic','required','class'=>'form-control','options'=>$sub_topics));
	}
	else{
		echo $this->Form->input('sub_topic_id',array('type'=>'select','empty'=>'Select Sub topic','div'=>false,'label'=>'Sub Topic','required','class'=>'form-control'));
	}
?>