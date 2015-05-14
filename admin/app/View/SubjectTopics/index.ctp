<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Topics</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Topic',array('controller'=>'SubjectTopics','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Subject</th><th>Topic</th><th>Action</th>
	</tr>
	<?php foreach($topics as $sub){ ?>
	<tr>
		<td> <?php  echo $sub['Subject']['display_name']; ?> </td>
		<td><?php echo $sub['SubjectTopic']['topic_name']; ?></td>			
		<td> <?php echo $this->Html->link('Update Topic',array('controller'=>'SubjectTopics','action'=>'update',$sub['SubjectTopic']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Topic',array('controller'=>'SubjectTopics','action'=>'delete',$sub['SubjectTopic']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>