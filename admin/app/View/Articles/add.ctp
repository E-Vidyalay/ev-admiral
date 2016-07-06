<br/>
<h3>Add new page</h3>
<div class="row">
	<div class="col-lg-8">
		<?php echo $this->Form->create('Article',array('controller'=>'articles','action'=>'add')); 
		echo $this->Form->input('uploaded_by',array('type'=>'hidden','value'=>$user_id));
		echo $this->Form->input('allow',array('type'=>'hidden','value'=>1));		
		?>
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
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> Choose Images</h5>
			</div>
			<div class="panel-body" style="height:300px;overflow-y:scroll">
			<div class="row">
			<?php foreach ($images as $image) {
			?>
			<div class="col-lg-6 thumb" align="center">
			<?php echo '<img id="img_'.$image['Image']['id'].'" src="'.$this->webroot.'files/image/path/'.$image['Image']['id'].'/'.$image['Image']['path'].'" class="usr-img img-responsive" style="height:100px;width:100px"/>';
			echo '<br/>';
			echo '<a class=" btn btn-sm btn-success copy-button" data-clipboard-text="'.$evadmin_url.'files/image/path/'.$image['Image']['id'].'/'.$image['Image']['path'].'" title="Click to copy me.">Copy to Clipboard</a>';
			?>
			<br/>
			<br/>
			</div>
			
			<?php
			}
			?>
			</div>
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
		echo $this->Form->input('Add page',array(
				'type'=>'submit',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-success'
			));
		echo $this->Form->end();
	?>
	</div>
</div>
