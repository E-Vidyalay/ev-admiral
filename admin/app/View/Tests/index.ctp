<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Tests</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Test',array('controller'=>'Tests','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
	</div>
	<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Test</th><th>Subject</th><th>positive marks</th><th>negative marks</th><th>Upload Date</th><th>Last updated on</th><th>Last updated by</th><th>Action</th>
	</tr>
	<?php foreach ($tests as $test){ ?>
	<tr>
		<td> <?php  echo $test['Test']['name']; ?> </td>
		<td> <?php  echo $test['Subject']['name']; ?> </td>
		<td> <?php  echo $test['Markingscheme']['positive_marks']; ?> </td>
		<td> <?php  echo $test['Markingscheme']['negative_marks']; ?> </td>
		<td> <?php  echo $test['Test']['date']; ?> </td>
		<td> <?php  echo $test['Test']['updated_at']; ?> </td>
		<td> <?php  echo $test['Test']['updated_by']; ?> </td>

		<td> <?php echo $this->Html->link('Update Test',array('controller'=>'tests','action'=>'update',$standard['Test']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Test',array('controller'=>'tests','action'=>'delete',$test['Test']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>