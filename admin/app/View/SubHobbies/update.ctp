<br/>
<br/>
<div class="row">
<div class="col-lg-6 panel panel-default">
<h4>Update : Sub Hobby Category</h4>
<hr>
<?php 
    echo $this->Form->create('SubHobby',array('controller'=>'SubHobbies','url'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('hobby_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $hobby,
        'label' => 'Hobby Category',
        'empty'=>'-select-'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Sub Hobby Category'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Update Sub Category',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-sm btn-success'
     ));                               

?>
<br/>
</div>
</div>
