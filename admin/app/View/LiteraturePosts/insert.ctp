<br/>
<h3>Add Literature Post</h3>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
		<div class="panel-heading"><h5>Primary Details</h5></div>
		<?php
		echo $this->Form->create('LiteraturePost',array('type'=>'file','controller'=>'LiteraturePosts','action'=>'insert'));
		echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
		?>
		<div class="panel-body">
		<?php
		echo $this->Form->input('title',array('type'=>'text','class'=>'form-control','required','label'=>'Title','placeholder'=>'Article title'));?>
		</div>
		<div class="panel-body">
		<?php
		echo $this->Form->input('level_id',array('type'=>'select','class'=>'form-control','required','options'=>$levels,'empty'=>'Select level','label'=>'Select level'));
		?>
		</div>
		<div class="panel-body">
		<?php
		echo $this->Form->input('sub_literature_id',array('type'=>'select','class'=>'form-control','required','options'=>$lp,'empty'=>'Select type','label'=>'Select type'));
	?>
		</div>
	</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> Choose Images</h5>
			</div>
			<div class="panel-body" style="height:257px;overflow-y:scroll">
			<div class="row">
			<?php foreach ($images as $image) {
			?>
			
			<div class="col-lg-6 thumb" align="center">
			<?php echo '<img id="img_'.$image['Image']['id'].'" src="'.$this->webroot.'files/image/path/'.$image['Image']['id'].'/'.$image['Image']['path'].'" class="usr-img img-responsive" style="height:100px;width:100px"/>';
			echo '<br/>';
			echo '<a class=" btn btn-sm btn-success copy-button" data-clipboard-text="'.$this->webroot.'files/image/path/'.$image['Image']['id'].'/'.$image['Image']['path'].'" title="Click to copy me.">Copy to Clipboard</a>';
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
	<?php
	echo $this->Form->input('meta_description',array(
			'type'=>'textarea',
			'class'=>'form-control'
		));
		echo "<br>";
		?>
		</div>
		<div class="panel-heading">
		<?php
		echo $this->Form->input('Add Literature Post',array(
		     'type'=>'submit',
		     'div'=>false,
		     'label'=>false,
		     'class'=>'btn btn-success'
		     )); 
	?>
	</div>
	</div>
</div>