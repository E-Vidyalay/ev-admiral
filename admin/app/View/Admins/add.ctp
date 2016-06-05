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
                                        'label'=>false,
                                        'placeholder'=>'Username',
                                        'required'
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
                                        'label'=>false,
                                        'placeholder'=>'Email',
                                        'required'
                                    ));
                    ?>
			    </div>
			</div>
			<div class="form-group">
				<label for="firstname" class="col-sm-4 control-label">First Name</label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('firstname',array(
                                        'class'=>'form-control',
                                        'type'=>'text',
                                        'label'=>false,
                                        'placeholder'=>'First Name'
                                    ));
                    ?>
			    </div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-4 control-label">Last Name</label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('lastname',array(
                                        'class'=>'form-control',
                                        'type'=>'text',
                                        'label'=>false,
                                        'placeholder'=>'Last Name'
                                    ));
                    ?>
			    </div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-4 control-label">Role <i>(required)</i></label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('admin_type',array('type'=>'select','class'=>'form-control','required','options'=>$utypes,'empty'=>'-Select Admin Role-','label'=>false));
                    ?>
			    </div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-sm-4 control-label"></label>
			    <div class="col-sm-6">
			    	<?php echo $this->Form->input('Add User',array(
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
</div>