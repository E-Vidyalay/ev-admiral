<br/>
<h2>Recover Password</h2>
<div class="well">
<?php
	echo $this->Form->create('User',array('controller'=>'users','action'=>'update_password'));
	echo $this->Form->input('id',array('type'=>'hidden','value'=>$updated));
	//echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$updated));
	echo $this->Form->input('password',array('type'=>'password','class'=>'form-control','placeholder'=>'Enter new password','label'=>false));
	echo "<br/>";
	echo $this->Form->input('Proceed',array('type'=>'submit','div'=>false,'label'=>false,'class'=>'btn btn-success btn-sm'));

?>
</div>