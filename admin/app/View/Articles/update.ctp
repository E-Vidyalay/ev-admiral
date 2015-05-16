<br/>
<h3>Add new page</h3>
<div class="row">
	<div class="col-lg-8">
		<?php echo $this->Form->create('Article',array('controller'=>'articles','action'=>'update')); ?>
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
					'placeholder'=>'Title for the page',
					'label'=>'Title'
				));
			?>
			<br/>
			<?php echo $this->Form->input('alias',array(
					'type'=>'text',
					'required',
					'class'=>'form-control',
					'placeholder'=>'eg, home, about_us',
					'label'=>'Url alias'
				));
			?>
			<br/>
			<?php echo $this->Form->input('keywords',array(
					'type'=>'text',
					'required',
					'class'=>'form-control',
					'placeholder'=>'keywords',
					'label'=>'Keywords'
				));
			?>
			<br/>
			<?php echo $this->Form->input('meta_description',array(
					'type'=>'text',
					'required',
					'class'=>'form-control',
					'placeholder'=>'meta description',
					'label'=>'Meta Description'
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
		echo $this->Form->input('Update page',array(
				'type'=>'submit',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-success'
			));
		echo $this->Form->end();
	?>
	</div>
</div>
