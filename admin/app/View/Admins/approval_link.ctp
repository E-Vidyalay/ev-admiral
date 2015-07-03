<br/>
<?php
echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-arrow-left fa-fw')) . " Back",array('controller' => 'admins', 'action' => 'contribute_link'),array('escape' => false,'class'=>'btn btn-default btn-md'));
?>
<h3>Contributed Video link</h3>
<br/>
<div class="row">
	<div class="col-lg-10"><?php
	echo $this->Form->create('Admin',array('controller'=>'Admins','action'=>'approval_link','class'=>'approvalform'));?>
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> <?php echo $link['Link']['link_title']; ?></h5>
			</div>
			<div class="panel-body">
			<?php foreach ($subtop as $key => $value) {
				if($value['SubTopic']['id']==$link['Link']['sub_topic_id']){
					foreach ($topics as $topic) {
						if($topic['Topic']['id']==$link['Link']['topic_id']){
							echo '<b>Level:</b> '.$topic['Level']['level_name'];
							echo '<br/>';
							echo '<b>Subject:</b> '.$topic['Subject']['name'];
							echo '<br/>';
							echo '<b>Link Topic:</b> '.$topic['Topic']['name'];
							echo '<br/>';
							echo '<b>Link Sub Topic:</b> '.$value['SubTopic']['name'];
							echo '<br/>';
						}
					}
				}
			}
			echo '<iframe width="100%" height="415" src="'.$link['Link']['link_url'].'" frameborder="0" allowfullscreen style="padding:15px;border:1px solid #dfdfdf;"></iframe>';?>
			</div>
			<div class="panel-heading">
			<h5> <?php 
			if($user!=NULL){
				echo "By-".$user['User']['username'].", 	At-".$link['Link']['updated_at'];
			}
			else
			{
				echo "At-".$link['Link']['updated_at'];	
			}	
			 ?></h5>
			
			</div>
			<div class="panel-heading">
			<?php
			 
			echo $this->Form->input('link_id',array('type'=>'hidden','value'=>$link['Link']['id']));
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