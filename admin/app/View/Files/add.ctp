<br/>
<h1>Add link</h1>
<hr>
<?php
    // $up_p_name = ini_get("session.upload_progress.name"); 
    echo $this->Form->create('File',array('type' => 'file','multiple','controller'=>'Files','action'=>'add'));
    $this->Form->unlockField($up_p_name); 
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('display_name',array(
        'class'=>'form-control',
        'type'=> 'text',
        'value' => $sub_name,
        'label' => 'Subject',
        'readonly'
    ));
    echo "<br/>";

    echo $this->Form->input('topic_name',array(
     'class'=>'form-control',
     //'placeholder'=>'Name',
     'type'=>'text',
     'value' => $topic_name,
     'label'=>'Topic',
     'readonly'
      ));
    //echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";

     echo $this->Form->input('subtopic_name',array(
     'class'=>'form-control',
     //'placeholder'=>'Sub Topic Name',
     'value' => $sub_topic['SubTopic']['subtopic_name'],
     'label'=>'Sub Topic',
     'readonly'
      ));
     echo $this->Form->input('subtopic_id',array(
     'class'=>'form-control',
     //'placeholder'=>'Sub Topic Name',
     'value' => $sub_topic['SubTopic']['id'],
     'type'=>'hidden'
      ));
     echo "<br/>";
     echo $this->Form->input('file_desc',array(
        'class'=>'form-control',
        'placeholder'=>'Description',
        'type'=>'textarea',
        'label'=>'File Description',
        'optional'));
    
    echo "<br/>";
    echo $this->Form->input('files.', array('type' => 'file','multiple','class'=>'filestyle','data-buttonName'=>'btn-primary')); 
    echo $this->Form->input('file_dir', array('type' => 'hidden'));
    
    ?>
    <div class="progress  progress-striped active">
        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
        </div>
    </div>
    <?php

    echo "<br/>";
    
    echo $this->Form->input('Add file',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
