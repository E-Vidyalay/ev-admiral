<br/>
<h1>Subjects</h1>
<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Subject</th><th>Action</th>
	</tr>
	<?php foreach ($subjects as $subject){ ?>
	<tr>
		<td> <?php  echo $subject['Subject']['display_name']; ?> </td>
		
		<td> <?php echo $this->Html->link('Update Subject',array('controller'=>'subjects','action'=>'update',$subject['Subject']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Subject',array('controller'=>'subjects','action'=>'delete',$subject['Subject']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>