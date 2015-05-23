<br/>
<?php

echo $this->Form->input('subtopic_name',array(
	// 'class'=>'nav nav-tabs nav-justified',
	 'placeholder'=>'Sub Topic',
	 'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Sub Topic',
     'class'=>'form-control'
      ));
    
    echo "<br/>";
    
    echo $this->Form->input('Add Sub Topic',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));
    
?>
