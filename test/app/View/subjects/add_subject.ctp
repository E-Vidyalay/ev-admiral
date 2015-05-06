<br/>
<h2>Add Subject</h2>
<hr/>
<div class="well">

<?php
	echo $this->Form->create('Subject',array('action'=>'add_subject'));
	echo $this->Form->input('name',array(
		'type'=>'text',
		'class'=>'form-control',
		'label'=>'Subject Name:',
		'placeholder'=>'Enter the subject name',
		'required',

	));
	echo "<br/>";
	echo $this->Form->input('standard',array(
		'type'=>'text',
		'class'=>'form-control',
		'label'=>'Standard',
		'placeholder'=>'Enter the Standard',
		'required'
	));
	echo "<br/>";
	echo $this->Form->input('updated_by',array(
		'type'=>'hidden',
		'class'=>'form-control',
		'label'=>'Standard',
		'value'=>$user_id,
		
	));
	echo $this->Form->input('Add Subject',array(
		'type'=>'submit',
		'class'=>'btn btn-success',
		'label'=>false,
		'div'=>false
		
	));
	echo $this->Form->end();
?>

</div>