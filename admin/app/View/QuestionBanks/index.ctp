<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Questions</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Question',array('controller'=>'QuestionBanks','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
	</div>
	<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Question</th>
		<th>Subject</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($questions as $question){ ?>
	<tr>
		<td> <?php  echo $question['QuestionBank']['question']; ?> </td>
		<td> <?php  echo $question['Subject']['display_name']; ?> </td>
		<td> <?php echo $this->Html->link('Update Question',array('controller'=>'questions','action'=>'update',$question['QuestionBank']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Standard',array('controller'=>'questions','action'=>'delete',$question['QuestionBank']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>
