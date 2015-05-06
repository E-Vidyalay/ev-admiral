<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Tests</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Create Test',array('controller'=>'tests','action'=>'create_test'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<table  width="100%" class="table table-striped table-bordered" >
	<th>Sr. no.</th>
	<th>Test</th>
	<th>Subject</th>
	<th>Date</th>
	<th>Action</th>
	<?php
		$i=1;
		foreach ($tests as $test) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$test['Test']['name']."</td>";
			echo "<td>".$test['Subject']['display_name']."</td>";
			echo "<td>".$test['Test']['date']."</td>";
			echo "<td>";
            echo $this->Html->link('Update Test',array('controller'=>'tests','action'=>'update_test',$test['Test']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Test',array('controller'=>'tests','action'=>'delete_test',$test['Test']['id']),array('class'=>'btn btn-primary'));
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	?>
</table>