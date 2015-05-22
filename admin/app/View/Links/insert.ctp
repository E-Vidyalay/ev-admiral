<br/>
<h1>Add link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'insert'));
    echo $this->Form->input('id',array('type'=>'hidden'));
//echo $form->input("name", array( "error" => array( "class" => "error-message" ), "div" => false, "label" => "Name", "size" => "40" ) ); 
    echo $this->Form->input('subject_id',array(
            'class'=>'form-control',
            'options'=>$sb,
            'required',
            'empty'=>'Select sub topic',
            'label'=>'Sub topic'
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
     'placeholder'=>'description',
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

?>
