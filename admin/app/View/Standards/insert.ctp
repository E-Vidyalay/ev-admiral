<br/>
<h1>Add New Standard</h1>
<hr>
<?php 
	echo $this->Form->create('Standard',array('controller'=>'standards','url'=>'insert'));
	echo $this->Form->input('level_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $levels,
        'label' => 'Level',
        'empty'=>'-select-'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Standard'
      ));
    echo "<br/>";
    echo $this->Form->input('Add Standard',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
