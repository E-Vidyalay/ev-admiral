<br/>
<h1>Inserts subject</h1>
<hr>
<?php 
	echo $this->Form->create('Subject',array('subject'=>'insert'));
	echo $this->Form->input('subject',array(
	 'class'=>'form-control',
	 'placeholder'=>'subject',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject'
      ));

    echo "<br/>";

	

    echo $this->Form->input('Add subject',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
