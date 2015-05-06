<br/>
<h2>Recover Password</h2>
<div class="well">
<?php
	echo $this->Form->create('Student',array('controller'=>'students','action'=>'forgot_password'));
	echo $this->Form->input('email',array('type'=>'email','class'=>'form-control','placeholder'=>'Enter your email address','label'=>false,'required'));
	echo "<br/>";
	echo $this->Form->input('Proceed',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'btn btn-success btn-sm'));

?>
</div>