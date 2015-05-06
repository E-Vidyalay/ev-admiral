<br/>
<br/>
<br/>


	<center><?php echo $this->Html->image('sm_logo_1.png',array('style'=>'height:80px')); ?>
		<p style="padding: 15px;font-size: 18px;font-weight:600">Santmegh Education | Admin Login</p>
	</center>
	<hr style="color=#eeeeee"/>
	<?php 
		echo $this->Form->create('User');
		echo $this->Form->input('username',array(
			'type'=>'text',
			'class'=>'form-control',
			'title'=>false,
			'label'=>false,
			'placeholder'=>'Username',
			
		));
		echo "<br/>";
		echo $this->Form->input('password',array(
			'type'=>'password',
			'class'=>'form-control',
			'title'=>false,
			'label'=>false,
			'placeholder'=>'Password',
			
		));
		echo "<br/>";
		echo $this->Form->input('Login',array(
			'type'=>'submit',
			'class'=>'btn btn-primary btn-block',
			'title'=>false,
			'label'=>false,
			'placeholder'=>'Username',
			
		));
		echo $this->Form->end();
		echo "<center>".$this->Html->link('Forgot password ?',array('controller'=>'users','action'=>'forgot_password'));
		
	?>
	<br/><br/><br/><br/><br/>


