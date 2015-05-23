<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Sub Topics</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Sub Topic',array('controller'=>'SubTopics','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Subject</th><th>Topic</th><th>Sub Topic</th><th>Action</th>
	</tr>
	<?php foreach($subtopics as $sub){ ?>
	<tr>
		<?php foreach($subjects as $s) 
		if($sub['SubjectTopic']['subject_id']==$s['Subject']['id'])
		{?>

	
		<td> <?php echo $s['Subject']['display_name']; ?> </td>
		<td><?php echo $sub['SubjectTopic']['topic_name']; ?></td>
		<td><?php echo $sub['SubTopic']['subtopic_name']; ?></td>	
				
		<td> <?php echo $this->Html->link('Update Sub Topic',array('controller'=>'SubTopics','action'=>'update',$sub['SubTopic']['id'],$sub['SubjectTopic']['topic_name'],$s['Subject']['display_name']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";

			echo $this->Html->link('Delete Sub Topic',array('controller'=>'SubTopics','action'=>'delete',$sub['SubTopic']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";

			
			echo $this->Html->link('Add Files',array('controller'=>'Files','action'=>'add',$sub['SubTopic']['id'],$sub['SubjectTopic']['topic_name'],$s['Subject']['display_name']),array('class'=>'btn btn-primary'));

			
		?>
		</td>
		<?php } ?>
	</tr> 	
	<?php } ?>
</table>