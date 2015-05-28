<br/>
<h1>Inserts standard</h1>
<hr>
<?php 
	echo $this->Form->create('Standard',array('controller'=>'standards','action'=>'insert'));
	echo $this->Form->input('standard',array(
	 'class'=>'form-control',
	 'placeholder'=>'Standard',
	 'type'=>'number',
     'required',
     'autofocus',
     'label'=>'Standard',
     'min'=>'0'
      ));

    echo "<br/>";

	echo $this->Form->input('section',array(
     'class'=>'form-control',
     'placeholder'=>'Section',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Section'
      ));

    echo "<br/>";

    echo $this->Form->input('Add standard',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>
