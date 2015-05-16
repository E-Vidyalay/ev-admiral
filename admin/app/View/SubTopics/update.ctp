<br/>
<h1>Update Sub topic</h1>
<hr>
<?php 
    echo $this->Form->create('SubTopic',array('controller'=>'SubTopics','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('display_name',array(
        'class'=>'form-control',
        'type'=> 'text',
        'value' => $dName,
        'label' => 'Subject',
        'disabled'
    ));
    echo "<br/>";
    echo $this->Form->input('SubjectTopic.topic_name',array(
     'class'=>'form-control',
     //'placeholder'=>'Name',
     'type'=>'text',
     'options' => $topicnames,
     'label'=>'Topic',
     'disabled'
      ));
    //echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";

     echo $this->Form->input('subtopic_name',array(
     'class'=>'form-control',
     'placeholder'=>'Sub Topic Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Sub Topic'
      ));
    
     echo "<br/>";

    echo $this->Form->input('update sub topic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
