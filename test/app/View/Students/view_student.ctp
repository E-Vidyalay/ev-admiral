<br/>
<div class="panel panel-default">
	<div class="panel-heading">
		<h4><?php echo "Details of  &nbsp;&nbsp;<font color='#2C6877' face='Courier New' size='5'>".strtoupper($student['Student']['first_name'])." ".strtoupper($student['Student']['last_name'])."</font>";?></h4>
		<?php 
			if($student['Student']['path']!=null){
				echo "<img src='".$this->webroot."files/student/path/".$student['Student']['path_dir']."/".$student['Student']['path']."' style='height:100px;width:100px' />";
			}
			
		?>
	</div>
	<div class="panel-body">
		<table class="table table-striped">
			<tr>
				<th>Full name :</th>
				<td><?php echo $student['Student']['first_name']." ".$student['Student']['last_name'];?></td>
			</tr>
			<tr>
				<th>Birth Date :</th>
				<td><?php echo $student['Student']['birthdate'];?></td>
			</tr>
			<tr>
				<th>Email Address :</th>
				<td><?php echo $student['Student']['email'];?></td>
			</tr>
			<tr>
				<th>Parent's Email Address :</th>
				<td><?php echo $student['Student']['parent_email'];?></td>
			</tr>
			<tr>
				<th>Mobile Number :</th>
				<td><?php echo $student['Student']['mobile'];?></td>
			</tr>
			<tr>
				<th>Parent's Mobile Number :</th>
				<td><?php echo $student['Student']['parent_mobile'];?></td>
			</tr>
			<tr>
				<th>School / Univeristy :</th>
				<td><?php echo $student['Student']['school'];?></td>
			</tr>
			<tr>
				<th>Address :</th>
				<td><?php echo $student['Student']['address'];?></td>
			</tr>
			<tr>
				<th>Subjects Enrolled For :</th>
				<td>
					<?php 
						foreach($studentSubjectMap as $subject){
							echo "<li>".$subject['Subject']['display_name']."</li>";
						}
					?>
				</td>
			</tr>
		</table>
	</div>
</div>

