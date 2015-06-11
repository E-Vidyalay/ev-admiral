<br/>
<h1>Update Literature Category</h1>
<hr>
<?php 
    echo $this->Form->create('Literature',array('controller'=>'Literatures','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('level_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $level,
        'label' => 'Level'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Literature Category'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Update Literature',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
