<br/>
<br/>
<br/>

	<center><?php echo $this->Html->image('sm_logo_1.png'); ?>
		<p style="padding: 15px;font-size: 18px;font-weight:600">Santmegh Education | Student Login</p>
	</center>
	<hr style=""/>
	<?php 
		echo $this->Form->create('Student',array('controller'=>'students','action'=>'login'));
		echo $this->Form->input('username',array(
			'type'=>'text',
			'class'=>'form-control',
			'title'=>false,
			'label'=>false,
			'placeholder'=>'Username',
			'required'
			
		));
		echo "<br/>";
		echo $this->Form->input('password',array(
			'type'=>'password',
			'class'=>'form-control',
			'title'=>false,
			'label'=>false,
			'placeholder'=>'Password',
			'required'
			
		));
		echo "<br/>";
		echo $this->Form->input('Login',array(
			'type'=>'submit',
			'class'=>'btn btn-primary btn-block',
			'title'=>false,
			'label'=>false,
			
			
		));
		echo $this->Form->end();
		echo "<center>".$this->Html->link('Forgot password ?',array('controller'=>'students','action'=>'forgot_password'));
		
	?>
	<br/><br/>


