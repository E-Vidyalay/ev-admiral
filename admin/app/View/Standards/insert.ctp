<br/>
<h1>Inserts standard</h1>
<hr>
<?php 
	echo $this->Form->create('Standard',array('standard'=>'insert'));
	echo $this->Form->input('standard',array(
	 'class'=>'form-control',
	 'placeholder'=>'standard',
	 'type'=>'number',
     'required',
     'autofocus',
     'label'=>'Standard'
      ));

    echo "<br/>";

	echo $this->Form->input('section',array(
     'class'=>'form-control',
     'placeholder'=>'section',
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
