<br/>
<br/>
<div class="row">
<div class="col-lg-6 panel panel-default">

<h4>Add new : literature sub category</h4>
<hr>
<?php 
    echo $this->Form->create('SubLiterature',array('controller'=>'SubLiteratures','url'=>'insert'));
   
    echo "<br/>";
    echo $this->Form->input('literature_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $literature,
        'label' => 'Literature category'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Literature sub category'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add Sub Category',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-sm btn-success'
     ));                               

?>
<br/>
</div>
</div>
