<br/>
<h1>Update subject</h1>
<hr>
<?php 
	echo $this->Form->create('Subject',array('subject'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->input('name',array(
	 'class'=>'form-control',
	 'placeholder'=>'name',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject'
      ));

    
    echo "<br/>";

	echo $this->Form->input('display_name',array(
     'class'=>'form-control',
     'placeholder'=>'display name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject display name'
      ));
    echo "<br/>";
    echo $this->Form->input('Standard.standard',array(
     'class'=>'form-control',
     'placeholder'=>'display name',
     'type'=>'disable',
     'required',
     'autofocus',
     'label'=>'Subject display name'
      ));
    echo "<br/>";
    echo $this->Form->input('Update subject',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));                               

?>