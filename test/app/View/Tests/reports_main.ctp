<br/>
<h3>Select Test for its Reports</h3>
<hr/>
<table class="table table-bordered table-stripped" width="100%">
	<tr>
		<th>Test Name</th>
		<th>Subject Name</th>
		<th>Date</th>
	</tr>
	<?php
		foreach ($tests as $test) {
			echo "<tr>";
				echo "<td>".$this->Html->link($test['Test']['name'],array('controller'=>'tests','action'=>'reports_test',$test['Test']['id']))."</td>";
				echo "<td>".$test['Subject']['display_name']."</td>";
				echo "<td>".$test['Test']['date']."</td>";
			echo "</tr>";
		}
	?>
</table>