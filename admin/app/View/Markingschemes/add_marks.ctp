<br/>
<h2>Add Marking Scheme</h2>
<hr/>
<div class="well">
	<?php
		echo $this->Form->create('Markingscheme',array('url'=>'add_marks'));
		echo $this->Form->input('positive_marks',array(
			'type'=>'number',
			'label'=>'Positve Marks',
			'placeholder'=>'Enter postive marks',
			'class'=>'form-control',
			'min'=>'0',
			'required'
		));
		echo "<br/>";
		echo $this->Form->input('negative_marks',array(
			'type'=>'number',
			'label'=>'Negative Marks',
			'placeholder'=>'Enter negative marks',
			'class'=>'form-control',
			'min'=>'0',
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