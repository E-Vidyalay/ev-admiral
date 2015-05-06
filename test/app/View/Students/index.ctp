<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Students</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Student',array('controller'=>'students','action'=>'add_student'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>

<hr/>
<table width="100%" class="table table-striped table-bordered" >
	<tr>
		<th>Sr. no.</th>
		<th>Student</th>
		<th>Enrolled Subjects</th>
		<th>Action</th>
	</tr>

<?php
	$f=1;
	foreach($students as $student){
		echo "<tr>";
		echo "<td>".$f."</td>";
		echo "<td>".$student['Student']['first_name']." ".$student['Student']['last_name']."</td>";
		echo "<td>";
			foreach($SubjectMapping as $subject){
				if($subject['Student']['id']==$student['Student']['id']){
					echo "<li>".$subject['Subject']['display_name']."</li>";
				}
			}
		echo "</td>";
		echo "<td>";
 		echo $this->Html->link('View Student Details',array('controller'=>'students','action'=>'view_student',$student['Student']['id']),array('class'=>'btn btn-primary'));
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $this->Html->link('Update Student Details',array('controller'=>'students','action'=>'update_student',$student['Student']['id']),array('class'=>'btn btn-primary'));
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $this->Html->link('Delete Student',array('controller'=>'students','action'=>'delete_student',$student['Student']['id']),array('class'=>'btn btn-primary'));		
		echo "</td>";
		echo "</tr>";
		$f++;
		
	}
?>
</table>