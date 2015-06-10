<br/>
<h1>Add new Literature</h1>
<hr>
<?php 
    echo $this->Form->create('Literature',array('controller'=>'Literatures','action'=>'insert'));
   
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
     'label'=>'Literature'
      ));

    echo '<br/>';

    echo $this->Form->input('color_code',array(
     'class'=>'form-control',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Color Code',
     'id'=>'picker'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add Literature',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
