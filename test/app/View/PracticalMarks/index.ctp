<br/>
<h3> Practical Tests</h3>
<hr/>
<table class="table table-striped table-bordered">
	<tr>
		<td>#</td>
		<td>Name</td>
		<td>Action</td>
	</tr>
	<?php
		$i=1;
		foreach ($tests as $test) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$test['PracticalTest']['name']."</td>";
			echo "<td>";
			
			echo $this->Html->link('Results',array('controller'=>'practical_marks','action'=>'add_results',$test['PracticalTest']['id']),array('class'=>'btn btn-sm btn-primary'));
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>
