<br/>
<div class="row">
	<div class="col-lg-12" id="data_contribute">
		<div class="panel panel-default">
			<div class="panel-heading">
            	<h4>Profile</h4>
        	</div>
        	<div class="panel-body">
        		<h4><i class="fa fa-user fa-fw"></i> User Details</h4>
        		<?php //pr($activeUser);?>
        		<?php echo $this->Form->create('Admin',array('controller'=>'Admins','url'=>'profile')) ?>
        		<div class="form-horizontal">
        			<?php echo $this->Form->input('id',array('type'=>'hidden'));?>
				  <div class="form-group">
				    <label for="username" class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-6">
				    	<?php echo $this->Form->input('username',array(
                                            'class'=>'form-control',
                                            'type'=>'text',
                                            'disabled',
                                            'label'=>false
                                        ));
                                    ?>
				    </div>
				    <div class="col-sm-4">
				      <p class="form-control-static">Usernames cannot be changed.</p>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="email" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-6">
				    	<?php echo $this->Form->input('email',array('type'=>'email','class'=>'form-control','required','label'=>false,'placeholder'=>'Email'));?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="role" class="col-sm-2 control-label">Role</label>
				    <div class="col-sm-6">
				    	<?php echo '<input type="text" value="'.$activeUser['User']['AdminType']['name'] .'"class="form-control" disabled/>'?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="firstname" class="col-sm-2 control-label">First Name</label>
				    <div class="col-sm-6">
				      <?php echo $this->Form->input('firstname',array('type'=>'text','class'=>'form-control','required','label'=>false,'placeholder'=>'First Name'));?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
				    <div class="col-sm-6">
				      <?php echo $this->Form->input('lastname',array('type'=>'text','class'=>'form-control','required','label'=>false,'placeholder'=>'Last Name'));?>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-6">
				    	<?php echo $this->Form->input('Update Profile',array(
						     'type'=>'submit',
						     'div'=>false,
						     'label'=>false,
						     'class'=>'btn btn-md btn-info'
						     ));  
						?>
				    </div>
				  </div>
					</div>
				</form>
				<hr>
				<h4><i class="fa fa-lock fa-fw"></i> Security</h4>
				<?php echo $this->Form->create('Admin',array('controller'=>'Admins','url'=>'changepassword')) ?>
        		<div class="form-horizontal">
        			<?php echo $this->Form->input('id',array('type'=>'hidden','value'=>$activeUser['User']['id']));?>
        			<div class="form-group">
				    <label for="oldpassword" class="col-sm-2 control-label">Old Password</label>
				    <div class="col-sm-6">
				    	<?php echo $this->Form->input('oldpassword',array('type'=>'password','class'=>'form-control','required','label'=>false,'placeholder'=>'Old Password','pattern'=>'.{7,25}','title'=>'8 to 24 characters length'));?>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="newpassword" class="col-sm-2 control-label">New Password</label>
				    <div class="col-sm-6">
				    	<?php echo $this->Form->input('newpassword',array('type'=>'password','class'=>'form-control','required','label'=>false,'placeholder'=>'New Password','pattern'=>'.{7,25}','title'=>'8 to 24 characters length'));?>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-6">
				    	<?php echo $this->Form->input('Update Password',array(
						     'type'=>'submit',
						     'div'=>false,
						     'label'=>false,
						     'class'=>'btn btn-md btn-info'
						     ));  
						?>
				    </div>
				  </div>
        		</div>
        		</form>
        	</div>
		</div>
	</div>
</div>