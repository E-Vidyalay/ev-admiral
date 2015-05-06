<br/>
<h2>Add Marking Scheme</h2>
<hr/>
<div class="well">
	<?php
		echo $this->Form->create('Markingscheme',array('action'=>'add_scheme'));
		echo $this->Form->input('positive_marks',array(
			'type'=>'text',
			'label'=>'Positve Marks',
			'placeholder'=>'Enter postive marks eg. 3/4',
			'class'=>'form-control',
			'required'
		));
		echo "<br/>";
		echo $this->Form->input('negative_marks',array(
			'type'=>'text',
			'label'=>'Negative Marks',
			'placeholder'=>'Enter negative marks eg. 1/0.5',
			'class'=>'form-control',
			'required'
		));
		echo "<br/>";
		
		echo $this->Form->input('updated_by',array(
			'type'=>'hidden',
			'class'=>'form-control',
			'label'=>'Standard',
			'value'=>$user_id,
		));
		echo $this->Form->input('Add Marking Scheme',array(
			'type'=>'submit',
			'class'=>'btn btn-success',
			'label'=>false,
			'div'=>false
			
		));
		echo $this->Form->end();
	?>
</div>