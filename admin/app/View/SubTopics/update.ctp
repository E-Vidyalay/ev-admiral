<br/>
<h3>Update sub topic</h3>
<hr/>
<?php 
    echo $this->Form->create('SubTopic',array('controller'=>'SubTopics','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden','value'=>$id));
?>

    <?php
        echo $this->Form->input('subject_topic_id',array(
                'class'=>'form-control',
                'required',
                'empty'=>'Select Topic',
                'options'=>$topic,
                'label'=>'Subject Topics'
            ));
        echo "<br/>";
        echo $this->Form->input('subtopic_name',array(
                'class'=>'form-control',
                'placeholder'=>'Sub topic name; eg. Verbs, Nouns',
                'required',
                'label'=>'Name'
            ));
        echo "<br/>";
        echo $this->Form->input('Submit',array('class'=>'btn btn-small btn-success','type'=>'submit','label'=>false,'div'=>false));
        echo $this->Form->end();
    ?>


