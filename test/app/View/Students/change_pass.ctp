<div class="pull-right">
	<?php
		echo $this->Html->link('Home',array('controller'=>'students','action'=>'index_student'),array('class'=>'btn btn-primary btn-sm'));
	?>	
</div>
<h2>Change Password</h2>
<div class="well">
	<?php
		echo $this->Form->create('Student',array('controller'=>'students','action'=>'change_pass'));
		echo $this->Form->input('password',array('type'=>'password','class'=>'form-control','required','placeholder'=>'Enter new Password','label'=>false));
		echo "<br/>";
		echo $this->Form->input('id',array('type'=>'hidden','value'=>$user_id));
		echo $this->Form->input('Change Password',array(
					'type'=>'submit',
					'class'=>'btn btn-success btn-small',
					'label'=>false,
					'div'=>false,
					'required'
		));	
		echo "<br/>";
		echo $this->Form->end();
	?>
</div>
