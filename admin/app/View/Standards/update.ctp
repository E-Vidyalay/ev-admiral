<br/>
<h1>Update standard</h1>
<?php 
	echo $this->Form->create('Standard',array('standard'=>'update'));
	echo $this->Form->input('standard',array(
	 'class'=>'form-control',
	 'placeholder'=>'standard',
	 'type'=>'number',
     'required',
     'autofocus',
     'label'=>'Standard'
      ));

	echo $this->Form->input('section',array(
     'class'=>'form-control',
     'placeholder'=>'section',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Section'
      ));
     echo $this->Form->input('Add standard',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>