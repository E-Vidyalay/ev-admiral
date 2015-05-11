<br/>
<h1>Add new subject</h1>
<hr>
<?php 
	echo $this->Form->create('Subject',array('controller'=>'subjects','action'=>'insert'));
    echo $this->Form->input('standard_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $stand,
        'label' => 'Standard'
    ));
    echo "<br/>";
	echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add subject',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
