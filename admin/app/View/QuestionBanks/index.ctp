<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Questions</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Question',array('controller'=>'Questions','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
	</div>
	<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Question</th><th>option 1</th><th>option 2</th><th>option 3</th><th>option 4</th><th>correct answer</th>
	</tr>
	<?php foreach ($questions as $question){ ?>
	<tr>
		<td> <?php  echo $question['Question']['question']; ?> </td>
		<td> <?php  echo $question['Questions']['option1']; ?> </td>
		<td> <?php  echo $question['Questions']['option2']; ?> </td>
		<td> <?php  echo $question['Questions']['option3']; ?> </td>
		<td> <?php  echo $question['Questions']['option4']; ?> </td>
		<td> <?php  echo $question['Questions']['correct']; ?> </td>
		<td> <?php echo $this->Html->link('Update Question',array('controller'=>'questions','action'=>'update',$question['Question']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Standard',array('controller'=>'questions','action'=>'delete',$question['Question']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>