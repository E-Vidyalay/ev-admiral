<br/>
<h3>Update news</h3>
<div class="row">
	<div class="col-lg-8">
		<?php echo $this->Form->create('HobbylobbyPost',array('controller'=>'HobbylobbyPosts','action'=>'update')); ?>
		<?php echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$user_id)); ?>
		<?php echo $this->Form->input('id',array('type'=>'hidden')); ?>
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> Primary Details</h5>
			</div>
			<div class="panel-body">
			<?php echo $this->Form->input('title',array(
					'type'=>'text',
					'required',
					'class'=>'form-control',
					'placeholder'=>'Title for Post',
					'label'=>'Title'
				));
			?>
			</div>
			
			<div class="panel-body">
			<?php echo $this->Form->input('level_id',array(
					'type'=>'select',
					'required',
					'class'=>'form-control',
					'options'=>$level,
					'label'=>'Level',
					'empty'=>'Select level'
				));
			?>
			</div>
			<div class="panel-body">
			<?php echo $this->Form->input('sub_hobby_id',array(
					'type'=>'select',
					'required',
					'class'=>'form-control',
					'options'=>$sl,
					'label'=>'Hobby',
					'empty'=>'Select hobby'
				));
			?>
			</div>
		</div>
		</div>
	</div>
<div class="panel panel-default">
	<div class="panel-heading">
	<h5> Content</h5>
	</div>
	<div class="panel-body">
	<?php echo $this->Form->input('meta_description',array(
			'type'=>'textarea',
		    'class'=>'form-control',
		    'id'=>'typingarea',
		    'rows'=>'10',
		    'label'=>'Description',
		    'style'=>'width:100%',
		));
	?>
	</div>
	<div class="panel-heading">
	<?php
		echo $this->Form->input('Edit Hobby Lobby Post',array(
				'type'=>'submit',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-success'
			));
	?>
	</div>
</div>
