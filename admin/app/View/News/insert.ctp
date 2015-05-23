<br/>
<h2>Add News</h2>
<hr/>
<div class="well">
	<?php
		echo $this->Form->create('New',array('action'=>'insert'));
		echo $this->Form->input('news',array(
			'type'=>'text',
			'label'=>'News',
			'placeholder'=>'Enter news',
			'class'=>'form-control',
			'required'
		));
		echo "<br/>";
		
		
		echo $this->Form->input('updated_by',array(
			'type'=>'hidden',
			'class'=>'form-control',
			'label'=>'updated by',
			'value'=>$user_id,
		));
		echo $this->Form->input('Add news',array(
			'type'=>'submit',
			'class'=>'btn btn-success',
			'label'=>false,
			'div'=>false
			
		));
		echo $this->Form->end();
	?>
</div>