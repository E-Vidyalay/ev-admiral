<br/>
<div class="row">
	<div class="col-lg-7 panel panel-body panel-default">
		<h4><i class="fa fa-user fa-fw"></i> Add New Admin User</h4>
		<hr>
		<?php echo $this->Form->create('Admin',array('controller'=>'admins','action'=>'add'));?>
		<div class="form-horizontal">
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label">Username <i>(required)</i></label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('username',array(
                                        'class'=>'form-control',
                                        'type'=>'text',
                                        'label'=>false
                                    ));
                    ?>
			    </div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-4 control-label">Email <i>(required)</i></label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('email',array(
                                        'class'=>'form-control',
                                        'type'=>'email',
                                        'label'=>false
                                    ));
                    ?>
			    </div>
			</div>
			<div class="form-group">
				<label for="name" class="col-sm-4 control-label">Name</label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('name',array(
                                        'class'=>'form-control',
                                        'type'=>'text',
                                        'label'=>false
                                    ));
                    ?>
			    </div>
			</div>
		</div>
<?php
echo "<br>";
echo $this->Form->input('sub_category_id',array('type'=>'select','class'=>'form-control','required','options'=>$sl,'empty'=>'Select book type','label'=>'Select book type'));
echo "<br>";
echo $this->Form->input('path',array(
	'type'=>'file',
	'class'=>'btn btn-sm btn-default',
	'label'=>'Please select Ebook file'
));
echo "<br>";
echo $this->Form->input('description',array(
	'type'=>'textarea',
	'class'=>'form-control'
));
echo "<br>";
echo $this->Form->input('Add ebook',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-md btn-info'
     ));  
?>
<br/>
</div>
</div>