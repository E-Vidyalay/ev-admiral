<br/>
<h2>Question for <?php echo $question['Subject']['display_name'];?></h2>
<hr/>
<div class="panel panel-default">
	<div class="panel panel-heading">
		<?php
			echo "<b>".$question['QuestionBank']['question']."</b>";
			echo "<img src='".$this->webroot."files/question_bank/path/".$question['QuestionBank']['path_dir']."/".$question['QuestionBank']['path']."' />";
			
		?>
	</div>
	<div class="panel-body">
		<table>
			<tr>
				<td> <b>a) </b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option1']."</p>";?></td>
			</tr>
			<tr>
				<td> <b>b) </b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option2']."</p>";?></td>
			</tr>
			<tr>
				<td> <b>c) </b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option3']."</p>";?></td>
			</tr>
			<tr>
				<td> <b>d) </b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option4']."</p>";?></td>
			</tr>
			<tr>
				<td> <b>e) </b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option5']."</p>";?></td>
			</tr>
		</table>
		<hr/>
		<h3>Correct Answer:</h3>
		<p style="color: red">
			<?php 
				
				echo $c_a;
				
			?>
			
		</p>
		
	</div>
</div>
