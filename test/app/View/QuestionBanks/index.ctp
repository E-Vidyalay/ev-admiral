<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Questions</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Question',array('controller'=>'question_banks','action'=>'add_question'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>


<hr/>
<table width="100%" class="table table-striped table-bordered" >
	<tr>
		<th>Sr. no.</th>
		<th>Question</th>
		<th>Action</th>
	</tr>

<?php
	$f=1;
	foreach($ques as $q){
		echo "<tr>";
		echo "<td>".$f."</td>";
		echo "<td>".$q['QuestionBank']['question']."</td>";
		echo "<td>";
 		echo $this->Html->link('View Question',array('controller'=>'question_banks','action'=>'view_question',$q['QuestionBank']['id']),array('class'=>'btn btn-primary'));
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $this->Html->link('Update Question',array('controller'=>'question_banks','action'=>'update_question',$q['QuestionBank']['id']),array('class'=>'btn btn-primary'));
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $this->Html->link('Delete Question',array('controller'=>'question_banks','action'=>'delete_question',$q['QuestionBank']['id']),array('class'=>'btn btn-primary'));		
		echo "</td>";
		echo "</tr>";
		$f++;
		
	}
?>
</table>