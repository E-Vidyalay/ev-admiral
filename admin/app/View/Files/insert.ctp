<br/>
<h1>Add link</h1>
<hr>
<?php
    echo $this->Form->create('File',array('type' => 'file','multiple','controller'=>'Files','action'=>'insert'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('subject_id',array(
            'class'=>'form-control',
            'options'=>$sb,
            'required',
            'empty'=>'Select sub topic',
            'label'=>'Sub topic'
        ));
    echo "<br/>";
    echo $this->Form->input('files.', array('type' => 'file','multiple','class'=>'filestyle','data-buttonName'=>'btn-primary'));
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
    echo $this->Form->input('file_dir', array('type' => 'hidden'));
    echo "<br/>";
    
    echo $this->Form->input('Add file',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));
?>