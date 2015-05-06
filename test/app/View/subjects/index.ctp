<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Students</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Subjects',array('controller'=>'subjects','action'=>'add_subject'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>


<hr/>
<table width="100%" class="table table-striped table-bordered" >
	<tr>
		<th>#</th>
		<th>Subject Name</th>
		<th>Standard</th>
		<th>Actions</th>
	</tr>
	<?php
		$i=1;
		foreach($subjects as $subject){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$subject['Subject']['name']."</td>";
			echo "<td>".$subject['Subject']['standard']."</td>";
			echo "<td>";
            echo $this->Html->link('Update Subject',array('controller'=>'subjects','action'=>'update_subject',$subject['Subject']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Subject',array('controller'=>'subjects','action'=>'delete_subject',$subject['Subject']['id']),array('class'=>'btn btn-primary'));
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
