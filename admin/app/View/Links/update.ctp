<br/>
<h1>Update Link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo "<br/>";

        echo $this->Form->input('subtopic_name',array(
        'class'=>'form-control',
        'type'=>'text',
        'value' => $sname,
        'label'=>'Sub Topic',
        'readonly'
        ));
         
        echo $this->Form->input('subtopic_id',array(
        'class'=>'form-control',
        'value' => $sub_topic['SubTopic']['id'],
        'type'=>'hidden'
        )); 

        echo "<br/>";
        
        echo $this->Form->input('Update link',array(
        'type'=>'submit',
        'div'=>false,
        'label'=>false,
        'class'=>'btn btn-lg btn-success btn-block'
        ));                                  

?>
