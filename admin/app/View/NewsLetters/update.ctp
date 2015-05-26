<br/>
<h3>Update news</h3>
<div class="row">
	<div class="col-lg-8">
		<?php echo $this->Form->create('NewsLetter',array('controller'=>'NewsLetters','action'=>'update')); ?>
		<?php echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$user_id)); ?>
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
					'placeholder'=>'Title for news',
					'label'=>'Title'
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
	<?php echo $this->Form->input('content',array(
			'type'=>'textarea',
		    'class'=>'form-control',
		    'id'=>'typingarea',
		    'rows'=>'10',
		    'label'=>'Content',
		    'style'=>'width:100%',
		));
	?>
	</div>
	<div class="panel-heading">
	<?php
		echo $this->Form->input('Edit news',array(
				'type'=>'submit',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-success'
			));
		echo $this->Form->end();
	?>
	</div>
</div>
