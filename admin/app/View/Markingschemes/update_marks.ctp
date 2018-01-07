<br/>
<h2>Update Marking Scheme</h2>
<hr/>
<div class="well">
	<?php
		echo $this->Form->create('Markingscheme',array('url'=>'update_marks'));
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
			'placeholder'=>'Enter negative marks',
			'class'=>'form-control',
			'required'
		));
		echo "<br/>";
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('updated_by',array(
			'type'=>'hidden',
			'class'=>'form-control',
			'label'=>'Standard',
			'value'=>$user_id,
		));
		echo $this->Form->input('Update Marking Scheme',array(
			'type'=>'submit',
			'class'=>'btn btn-success',
			'label'=>false,
			'div'=>false
			
		));
		echo $this->Form->end();
	?>
</div>