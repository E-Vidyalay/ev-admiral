<br/>
<h1>Add link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'insert'));
    echo $this->Form->input('uploaded_by',array('type'=>'hidden','value'=>$user_id));
    echo $this->Form->input('allow',array('type'=>'hidden','value'=>1)); 
    echo $this->Form->input('topic_id',array(
            'class'=>'form-control',
            'options'=>$topic,
            'required',
            'empty'=>'Select Topic',
            'label'=>'Topic',
            'id'=>'topics'
        ));
    echo "<br/>";
    echo "<div id='sb_div'>";
                        echo $this->Form->input('Link.sub_topic_id',array('type'=>'select','empty'=>'Select Sub topic','div'=>false,'label'=>'Sub Topic','class'=>'form-control'));
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
    'class'=>'form-error',
    'error'=>array('attributes'=>array('wrap'=>'small','class'=>'error')),
    'errorMessage'=>true,
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
     'placeholder'=>'Description',
     'type'=>'textarea',
     'required',
     'autofocus',
     'label'=>'Meta description about link'
      ));
    echo "<br/>";
    echo $this->Form->input('Add link',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));      
     echo "<br/>";
     echo "<br/>";                         

?>
