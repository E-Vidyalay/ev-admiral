<br/>
<br/>
<div class="row">
<div class="col-lg-6 panel panel-default">

<h4>Add new : hobby category</h4>
<hr>
<?php 
    echo $this->Form->create('Hobby',array('controller'=>'Hobbies','action'=>'insert'));
   
    echo "<br/>";
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
     'label'=>'Hobby category'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add Category',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-sm btn-success'
     ));                               

?>
<br/>
</div>
</div>
