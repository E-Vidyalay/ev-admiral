<br/>
<h1>Add link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'add'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('display_name',array(
        'class'=>'form-control',
        'type'=> 'text',
        'value' => $dName,
        'label' => 'Subject',
        'disabled'
    ));
    echo "<br/>";
    echo $this->Form->input('subtopic_id',array(
     'class'=>'form-control',
     //'placeholder'=>'Name',
     'type'=>'text',
     'value' => $topicnames,
     'label'=>'Topic',
     'disabled'
      ));
    //echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";

     echo $this->Form->input('subtopic_name',array(
     'class'=>'form-control',
     //'placeholder'=>'Sub Topic Name',
     'value' => $subtopicname,
     'label'=>'Sub Topic',
     'disabled'
      ));
     echo $this->Form->input('subtopic_id',array(
     'class'=>'form-control',
     //'placeholder'=>'Sub Topic Name',
     'value' => $subtopicId,
     'type'=>'hidden'
      ));
    
     echo "<br/>";

     echo $this->Form->input('link_url',array(
     'class'=>'form-control',
     'placeholder'=>'Enter url',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Link'
      ));

    echo "<br/>";
    
    echo $this->Form->input('Add link',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
