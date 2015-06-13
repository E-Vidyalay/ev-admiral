<br/>
<div class="row">
<div class="col-lg-6">
<div class="panel panel-default">
<div class="panel-heading">
<h4>Add images</h4>
</div>
<div class="panel-body">
<?php
echo $this->Form->create('Image',array('type'=>'file','multiple','controller'=>'Images','action'=>'insert'));
echo $this->Form->input('path.',array(
	'type'=>'file',
	'multiple',
	'label'=>'Select mulitple images for the website',
	'class'=>'btn btn-sm btn-default'
));
echo "<br>";
echo $this->Form->input('Add Images',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-md btn-info'
     ));  
?>
</div>
</div>
</div>
</div>