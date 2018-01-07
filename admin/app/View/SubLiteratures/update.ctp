<br/>
<br/>
<div class="row">
<div class="col-lg-6 panel panel-default">
<h4>Update Sub Category</h4>
<hr>
<?php 
    echo $this->Form->create('SubLiterature',array('controller'=>'SubLiteratures','url'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('literature_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $literature,
        'label' => 'Literature'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Sub Literature'
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
