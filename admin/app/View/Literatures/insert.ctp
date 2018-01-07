<br/>
<div class="row">
<div class="col-lg-6 panel panel-default">

<h4>Add new Literature category</h4>
<hr>
<?php 
    echo $this->Form->create('Literature',array('controller'=>'Literatures','url'=>'insert'));
   
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Literature Category'
      ));

    echo '<br/>';

    echo $this->Form->input('color_code',array(
     'class'=>'form-control',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Select color for box in front-end',
     'id'=>'picker'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add Literature',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-sm btn-success'
     ));                               

?>
<br/>
</div>
</div>
