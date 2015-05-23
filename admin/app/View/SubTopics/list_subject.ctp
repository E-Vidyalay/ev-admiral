<br/>

<?php
	echo $this->Form->input('subject_id',array(
			'options'=>$subjects,
			'class'=>'subject-ls form-control',
			'required',
			'empty'=>'Select Subject'
		));
?>