<br/>
<<<<<<< HEAD
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
=======
<h1>Update link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'insert'));
    echo $this->Form->input('id',array('type'=>'hidden'));

    echo $this->Form->input('subject_id',array(
            'class'=>'form-control',
            'options'=>$sb,
            'required',
            'empty'=>'Select Subject',
            'label'=>'Subject'
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
>>>>>>> 2296378b767aa1f55eff290c3322e6c29638eef2

?>
