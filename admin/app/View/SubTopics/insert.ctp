<br/>
<h1>Add new Sub Topic</h1>
<hr>
<?php 
	echo $this->Form->create('SubTopic',array('controller'=>'SubTopics','action'=>'insert'));
    
  /*  echo $this->Form->input('subject_id',array('options'=>$subjects,'class'=>'form-control','empty'=>'Select subject','required'));
    echo "<br/>";*/


    echo $this->Html->nestedList($subjects,array(
     'class'=>'nav nav-tabs nav-justified'
     /*'placeholder'=>'Topic',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Name'*/
      ));

	echo $this->Form->input('topic_name',array(
	 'class'=>'nav nav-tabs nav-justified',
	 'placeholder'=>'Topic',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Name'
      ));
    
    echo "<br/>";
    
    echo $this->Form->input('Add Sub Topic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
