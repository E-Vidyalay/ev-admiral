<br/>
<div class="row">
<div class="col-lg-7 panel panel-body panel-default">
<h4>Add new ebook</h4>
<hr>
<?php
echo $this->Form->create('Ebook',array('type'=>'file','controller'=>'ebooks','action'=>'insert'));
echo $this->Form->input('name',array('type'=>'text','class'=>'form-control','required','label'=>'Book Title','placeholder'=>'Book name'));
echo "<br>";
echo $this->Form->input('level_id',array('type'=>'select','class'=>'form-control','required','options'=>$level,'empty'=>'Select level/age group of the book'));
echo "<br>";
echo $this->Form->input('sub_category_id',array('type'=>'select','class'=>'form-control','required','options'=>$sl,'empty'=>'Select book type','label'=>'Select book type'));
echo "<br>";
echo $this->Form->input('path',array(
	'type'=>'file',
	'class'=>'btn btn-sm btn-default',
	'label'=>'Please select Ebook file'
));
echo "<br>";
echo $this->Form->input('description',array(
	'type'=>'textarea',
	'class'=>'form-control'
));
echo "<br>";
echo $this->Form->input('Add ebook',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-md btn-info'
     ));  
?>
<br/>
</div>
</div>