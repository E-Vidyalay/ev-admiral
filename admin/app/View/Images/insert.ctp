<br/>
<h1>Add new subject</h1>
<hr>
<?php
echo $this->Form->create('Image',array('type'=>'file','multiple','controller'=>'Images','action'=>'insert'));
echo $this->Form->input('path.',array(
	'type'=>'file',
	'multiple',
	'class'=>'btn btn-sm btn-default'
));
echo "<br>";
echo $this->Form->input('Add Images',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-md btn-info'
     ));  
?>