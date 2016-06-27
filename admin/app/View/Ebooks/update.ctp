<br/>
<div class="row">
<div class="col-lg-10 panel panel-body panel-default">
<h4>Update ebook</h4>
<hr>
<?php
echo $this->Form->create('Ebook',array('type'=>'file','controller'=>'ebooks','action'=>'update'));
echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->input('name',array('type'=>'text','class'=>'form-control','required','label'=>'Book Title','placeholder'=>'Book name'));
echo "<br>";
echo "<label>If you dont't know the Author's name then write the Compiler's name in both Author Name and Compiled by.</label>";
echo "<br>";
echo $this->Form->input('author',array('type'=>'text','class'=>'form-control','required','label'=>'Author Name','placeholder'=>'Author name'));
echo "<br>";
echo $this->Form->input('compiler',array('type'=>'text','class'=>'form-control','label'=>'Compiled by ( સંકલન )','placeholder'=>'Compiled by ( સંકલન )'));
echo "<br>";
echo "<div class='input-group-addon' align='left'>";
echo $this->Form->input('with_translation', array(
    'options' => array('NO', 'YES'),
    'type' => 'radio',
    'class'=>'radio-inline',
    'label'=>'Is Translation available in E-book?'
));
echo "</div>";
echo "<br>";
echo "<div class='input-group-addon' align='left'>";
echo $this->Form->input('with_picture', array(
    'options' => array('NO', 'YES'),
    'type' => 'radio',
    'class'=>'radio-inline',
    'label'=>'Are Pictures available in E-book?'
));
echo "</div>";
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
echo $this->Form->input('Update ebook',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-md btn-info'
     ));  
?>
<br/>
</div>
</div>