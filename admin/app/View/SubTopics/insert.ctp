<br/>
<h1>Add new SubTopic</h1>
<hr>
<?php 
    echo $this->Form->create('SubTopic',array('controller'=>'SubTopics','action'=>'insert'));
   
    echo "<br/>";
    echo $this->Form->input('topic_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $topic,
        'label' => 'Topic'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'SubTopic'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add SubTopic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>

