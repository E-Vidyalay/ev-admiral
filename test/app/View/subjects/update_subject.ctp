<br/>
<h2>Update Subject</h2>
<hr/>
<div class="well">
<?php
	echo $this->Form->create('Subject',array('action'=>'update_subject'));
	echo $this->Form->input('name',array(
		'type'=>'text',
		'class'=>'form-control',
		'label'=>'Subject Name:',
		'placeholder'=>'Enter the subject name',
		'required'
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
	echo $this->Form->input('id',array(
		'type'=>'hidden',
	));
	echo $this->Form->input('Update Subject',array(
		'type'=>'submit',
		'class'=>'btn btn-success',
		'label'=>false,
		'div'=>false
		
	));
?>

</div>