<br/>
<h1>Add new Topic</h1>
<hr>
<?php 
	echo $this->Form->create('Topic',array('controller'=>'SubjectTopics','action'=>'insert'));
  /*  echo $this->Form->input('subject_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $stand,
        'label' => 'Subject'
    ));*/
    echo $this->Form->input('subject_id',array('options'=>$subjects,'class'=>'form-control','empty'=>'Select subject','required'));
    echo "<br/>";

	echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Topic',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Topic'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add Topic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
