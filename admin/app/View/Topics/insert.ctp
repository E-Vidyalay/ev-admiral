<br/>
<h1>Add new topic</h1>
<hr>
<?php 
	echo $this->Form->create('Topic',array('controller'=>'topics','url'=>'insert'));
    echo $this->Form->input('level_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $level,
        'label' => 'Level',
        'empty'=>'-select-'
    ));
    echo "<br/>";
    echo $this->Form->input('subject_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $subject,
        'label' => 'Subject',
        'empty'=>'-select-'
    ));
    echo "<br/>";
	echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Topic'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add topic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
