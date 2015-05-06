<div class="pull-right">
	<?php
		echo $this->Html->link('Home',array('controller'=>'students','action'=>'index_student'),array('class'=>'btn btn-primary btn-sm'));
	?>	
</div>
<h1>Result</h1>

<table class="table table-stripped table-bordered">
	<tr>
		<th>Student Name</th>
		<th>Test Name</th>
		<th>Correct Answer</th>
		<th>Incorrect Answer</th>
		<th>Unanswered</th>
		<th>Total Score</th>
		
	</tr>
	<tr>
		<td><?php echo $result['Student']['first_name']." ".$result['Student']['last_name'];?></td>
		<td><?php echo $result['Test']['name'];	?></td>
		<td><?php echo $result['TestStudentResult']['correct_ans']."<br/>(".$result['TestStudentResult']['correct_ans']."*".$marking_scheme['Markingscheme']['positive_marks'].")";	?></td>
		<td><?php echo $result['TestStudentResult']['incorrect_ans']."<br/>(".$result['TestStudentResult']['incorrect_ans']."*(-".$marking_scheme['Markingscheme']['negative_marks']."))";	?></td>
		
		<td><?php echo $result['TestStudentResult']['unmarked']."<br/>(".$result['TestStudentResult']['unmarked']."*0)";	?></td>
		<td><?php echo "<b>".$result['TestStudentResult']['marks_obtained']."/".$result['TestStudentResult']['total_mrks']."</b>";?></td>
		
	</tr>

</table>
<p style="color:red">Note: This paper is checked using "<?php  echo $marking_scheme['Markingscheme']['display_name'];?>" marking scheme</p>