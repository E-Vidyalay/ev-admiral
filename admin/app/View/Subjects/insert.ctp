<br/>
<h1>Add new subject</h1>
<hr>
<?php 
	echo $this->Form->create('Subject',array('controller'=>'subjects','action'=>'insert'));
<<<<<<< HEAD
   
=======
>>>>>>> aa4bb3a671a3edcec539b5eab4e746a3f3521052
	echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'Name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('Add subject',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
