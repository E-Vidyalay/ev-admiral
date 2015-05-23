<br/>
<h2>Update News</h2>
<hr/>
<div class="well">
	<?php
		echo $this->Form->create('New',array('action'=>'update'));
		echo $this->Form->input('title',array(
			'type'=>'text',
			'label'=>'news',
			'placeholder'=>'Enter news',
			'class'=>'form-control',
			'required'
		));
		
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('updated_by',array(
			'type'=>'hidden',
			'class'=>'form-control',
			'label'=>'New',
			'value'=>$user_id,
		));
		echo $this->Form->input('Update News',array(
			'type'=>'submit',
			'class'=>'btn btn-success',
			'label'=>false,
			'div'=>false
			
		));
		echo $this->Form->end();
	?>
</div>