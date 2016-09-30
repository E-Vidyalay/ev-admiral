<br/>
<h1>Add link</h1>
<hr>
<?php 
    echo $this->Form->create('Link',array('controller'=>'Links','action'=>'multiple_insert','type'=>'file'));
     echo $this->Form->input('file',array(
         'class'=>'form-error',
         'error'=>array('attributes'=>array('wrap'=>'small','class'=>'error')),
         'errorMessage'=>true,
         'class'=>'form-control',
         'type'=>'file',
          'required',
          'autofocus',
        'label'=>'Links') );
  echo "<br/>";
     
    echo $this->Form->input('Add links',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));      
     echo "<br/>";
     echo "<br/>";                         

?>
