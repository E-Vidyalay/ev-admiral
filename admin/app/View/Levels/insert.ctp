<br/>
<h1>Add new subject</h1>
<hr>
<?php 
	echo $this->Form->create('Level',array('controller'=>'levels','url'=>'insert'));
	echo $this->Form->input('level_name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Level'
      ));
    echo "<br/>";
    echo $this->Form->input('Add Level',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
