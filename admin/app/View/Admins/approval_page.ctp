<br/>
<?php
echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-arrow-left fa-fw')) . " Back",array('controller' => 'admins', 'action' => 'contribute'),array('escape' => false,'class'=>'btn btn-default btn-md'));
?>
<h3>Contributed Article</h3>
<br/>
<div class="row">
	<div class="col-lg-12"><?php
	echo $this->Form->create('Admin',array('controller'=>'Admins','action'=>'approval_page','class'=>'approvalform'));?>
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> <?php echo $page['Article']['title']; ?></h5>
			</div>
			<div class="panel-body">
			<?php echo $page['Article']['content'];?>
			</div>
			<div class="panel-heading">
			<h5> <?php
			if($user!=NULL){
				echo "By-".$user['User']['username'].", 	At-".$page['Article']['updated_at'];
			}
			else
			{
				echo "At-".$page['Article']['updated_at'];
			}
			 ?></h5>

			</div>
			<div class="panel-heading">
			<?php

			echo $this->Form->input('page_id',array('type'=>'hidden','value'=>$page['Article']['id']));
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
				'id'=>'approval',
				'name'=>'approval',
				'div'=>false,
				'label'=>false,
				'class'=>'btn btn-success btn-block'));
			?>
			</div>
			<div class="col-lg-2">
			<?php
			echo $this->Form->submit('Deny',array(
				'id'=>'denial',
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
