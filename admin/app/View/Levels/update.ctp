<br/>
<h1>Update Level</h1>
<hr>
<?php 
    echo $this->Form->create('Level',array('controller'=>'levels','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('level_name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Level'
      ));

     echo "<br/>";
    
    echo $this->Form->input('Update Level',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
