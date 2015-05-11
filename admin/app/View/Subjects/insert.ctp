<br/>
<h1>Inserts subject</h1>
<hr>
<?php 
	echo $this->Form->create('Subject',array('subject'=>'insert'));
	echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject'
      ));

    echo "<br/>";
    
    echo $this->Form->input('display_name',array(
     'class'=>'form-control',
     'placeholder'=>'Subject',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Display name'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
	echo $this->Form->input('standard_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $stand,
        'label' => 'Standard' ));
    echo "<br/>";
    
    echo $this->Form->input('Add subject',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
