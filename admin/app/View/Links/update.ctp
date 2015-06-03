<br/>
<h1>Update link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));

    echo $this->Form->input('topic_id',array(
            'class'=>'form-control',
            'options'=>$topic,
            'required',
            'empty'=>'Select Subject',
            'label'=>'Subject',
            'id'=>'topics'
        ));
    echo "<br/>";
    echo "<div id='sb_div'>";
                    if($has_sbt){
                        echo $this->Form->input('Link.sub_topic_id',array('type'=>'select','empty'=>'Select Sub topic','div'=>false,'label'=>'Sub Topic','required','class'=>'form-control','options'=>$sub_topics));
                    }
                    else{
                        echo $this->Form->input('Link.sub_topic_id',array('type'=>'select','empty'=>'Select Sub topic','div'=>false,'label'=>'Sub Topic','required','class'=>'form-control'));
                    }
                    echo "</div>";
    echo "<br/>";
    echo $this->Form->input('link_title',array(
            'class'=>'form-control',
            'type'=>'text',
            'required',
            'placeholder'=>'Title',
            'label'=>'Link Title'
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
    echo $this->Form->input('tags',array(
     'class'=>'form-control',
     'placeholder'=>'description',
     'type'=>'textarea',
     'required',
     'autofocus',
     'label'=>'Meta description about link'
      ));
    echo "<br/>";
    echo $this->Form->input('Update link',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               
    echo "<br/>";
    echo "<br/>";
?>
