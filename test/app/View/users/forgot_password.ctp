<br/>
<h2>Recover Password</h2>
<div class="well">
<?php
	echo $this->Form->create('User',array('controller'=>'users','action'=>'forgot_password'));
	echo $this->Form->input('email',array('type'=>'text','class'=>'form-control','placeholder'=>'Enter your email address','label'=>false));
	echo "<br/>";
	echo $this->Form->input('Proceed',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'btn btn-success btn-sm'));

?>
</div>