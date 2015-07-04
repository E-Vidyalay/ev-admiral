<br/>
<?php
echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-arrow-left fa-fw')) . " Back",array('controller' => 'admins', 'action' => 'contribute_ebook'),array('escape' => false,'class'=>'btn btn-default btn-md'));
?>
<h3>Contributed Ebook</h3>
<br/>
<div class="row">
	<div class="col-lg-12"><?php
	echo $this->Form->create('Admin',array('controller'=>'Admins','action'=>'approval_ebook'));?>
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> <?php echo $book['Ebook']['name']; ?></h5>
			</div>
			<div class="panel-body">
			<?php
			echo '<h4><b>Ebook name:</b> '.$book['Ebook']['path'].'</h4>';
			echo '<br/>';
			echo '<h4><b>Ebook descriptopn:</b> '.$book['Ebook']['description'].'</h4>';
			echo '<br/>';
			echo "Click here to view book: <a target='_blank' href='".$evsite_url."files/ebook/path/".$book['Ebook']['id']."/".$book['Ebook']['path']."' class='btn-sm btn btn-info hidden-xs'>View book</a>";
			?>
			</div>
			<div class="panel-heading">
			<h5> <?php
			if($user!=NULL){
				echo "By-".$user['User']['username'].", 	At-".$book['Ebook']['updated_at'];
			}
			else
			{
				echo "At-".$book['Ebook']['updated_at'];
			}
			 ?></h5>

			</div>
			<div class="panel-heading">
			<?php

			echo $this->Form->input('book_id',array('type'=>'hidden','value'=>$book['Ebook']['id']));
			echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$user['User']['id']));
			echo $this->Form->input('comment',array(
				'type'=>'textarea',
		    	'class'=>'form-control',
		    	'id'=>'typingarea',
		    	'rows'=>'10',
		    	'label'=>'Comments',
		    	'style'=>'width:100%',
			));
			?>
			<br/>
			<div class="row">
				<div class="col-lg-2 col-lg-offset-4">
			<?php
			echo $this->Form->submit('Approve',array(
				'name'=>'approval',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-success btn-block'));
			?>
			</div>
			<div class="col-lg-2">
			<?php
			echo $this->Form->submit('Deny',array(
				'name'=>'approval',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-danger btn-block'));
			echo $this->Form->end();
			?>
			</div>
			</div>
		</div>
	</div>
</div>
