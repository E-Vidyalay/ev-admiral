<br/>
<h2>Add Question</h2>
<hr/>
<?php

echo $this->Form->create('QuestionBank',array('type'=>'file','controller'=>'question_banks','action'=>'add_question'));
echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$user_id));
echo $this->Form->input('subject_id',array('options'=>$subjects,'class'=>'form-control','empty'=>'Select subject','required'));
echo "<br/>";
echo $this->Form->input('question',array(
	'type'=>'textarea',
	'class'=>'form-control',
	'id'=>'typingarea',
	'rows'=>'4',
	'label'=>'Question:',
	'style'=>'width:100%',
	
));
echo "<br/>";
echo $this->Form->input('path',array(
	'type'=>'file',
	'class'=>'form-control',
	'label'=>'Image for question:',
	'style'=>'font-size:12px',
	
));
echo "<hr/>";
echo "<h3>Answers for the above question</h3>";

echo "<hr/>";

echo $this->Form->input('option1',array(
	'type'=>'textarea',
	'class'=>'form-control',	
	
	'label'=>'Option 1:',
	'style'=>'width:100%',
	
));
echo "<br/>";
echo $this->Form->input('option2',array(
	'type'=>'textarea',
	'class'=>'form-control',
	
	
	'label'=>'Option 2:',
	'style'=>'width:100%'
));
echo "<br/>";
echo $this->Form->input('option3',array(
	'type'=>'textarea',
	'class'=>'form-control',
	
	
	'label'=>'Option 3:',
	'style'=>'width:100%'
));
echo "<br/>";
echo $this->Form->input('option4',array(
	'type'=>'textarea',
	'class'=>'form-control',
	
	'rows'=>'1',
	'label'=>'Option 4:',
	'style'=>'width:100%'
));
echo "<br/>";
echo $this->Form->input('option5',array(
	'type'=>'textarea',
	'class'=>'form-control',
	
	'rows'=>'1',
	'label'=>'Option 5:',
	'style'=>'width:100%;'
));
echo "<br/>";
echo "<hr>";
echo "<h3>Select correct answer for the above question</h3>";
echo "<hr/>";
for($i=1;$i<=5;$i++){
	echo $this->Form->input('QuestionBank.ans.'.$i,array(
		'type'=>'checkbox',
		'label'=>'option'.$i,
		'value'=>'option'.$i,
	));
}
echo "<hr/>";
echo $this->Form->input('Add Question',array(
	'type'=>'submit',
	'class'=>'btn btn-success',
	'label'=>false,
	'div'=>false
	
));

echo $this->Form->end();
?>
<br/><br/>