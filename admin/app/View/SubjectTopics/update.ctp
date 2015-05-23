<br/>
<h1>Update topic</h1>
<hr>
<?php 
    echo $this->Form->create('SubjectTopic',array('controller'=>'SubjectTopics','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('Subject.display_name',array(
        'class'=>'form-control',
        'type'=> 'text',
        'options' => $dName,
        'label' => 'Subject',
        'disabled'
    ));
    echo "<br/>";
    echo $this->Form->input('topic_name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Topic'
      ));
    //echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('update topic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
