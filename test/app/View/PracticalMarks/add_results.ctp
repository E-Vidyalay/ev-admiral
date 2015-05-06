<br/>
<h3>Add Practical Marks</h3>
<hr/>
<table class="table table-bordered">
	<tr>
		<td>#</td>
		<td>Name</td>
		<td>Marks</td>
	</tr>
	<?php
		$i=1;
		//echo $this->Form->create('PracticalMark',array('controller'=>'practical_marks','action'=>'add_results'));
		echo $this->Form->create();

		foreach($students as $student){
			$f=0;
			foreach ($mrks as $m) {
				if($m['Student']['id']==$student['Student']['id']){
					echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td style='width:40%'>".$student['Student']['first_name']." ".$student['Student']['last_name']."</td>";
			echo "<td>";
			echo '<div class="input-group">';
			echo $this->Form->input('student.'.$i.'.marks',array(
				'type'=>'text',
				'class'=>'form-control',				
				'label'=>false,
				'placeholder'=>'Marks Obtained',
				'value'=>$m['PracticalMark']['marks'],
				'div'=>false,
				'id'=>'mr'.$i
				
			));
			echo '<span class="input-group-addon">/'.$student["PraticalTest"]["total_marks"].'</span>';
			echo "</div>";
			
			echo "</td>";
			echo $this->Form->input('student.'.$i.'.student_id',array('type'=>'hidden','value'=>$student['Student']['id']));
			echo $this->Form->input('student.'.$i.'.id',array('type'=>'hidden','value'=>$m['PracticalMark']['id']));
			echo $this->Form->input('student.'.$i.'.updated_by',array('type'=>'hidden','value'=>$user_id));
			echo $this->Form->input('student.'.$i.'.prac_id',array('type'=>'hidden','value'=>$prac_id));
			echo "</tr>";
			$i++;
			$f++;
				}
				
			}
			if($f==0){
				echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td style='width:40%'>".$student['Student']['first_name']." ".$student['Student']['last_name']."</td>";
			echo "<td>";
			echo '<div class="input-group">';
			echo $this->Form->input('student.'.$i.'.marks',array(
				'type'=>'text',
				'class'=>'form-control',				
				'label'=>false,
				'placeholder'=>'Marks Obtained',
				'div'=>false,
				'id'=>'mr'.$i
				
			));
			echo '<span class="input-group-addon">/'.$student["PraticalTest"]["total_marks"].'</span>';
			echo "</div>";
			echo $this->Form->input('student.'.$i.'.id',array('type'=>'hidden'));
			echo "</td>";
			echo $this->Form->input('student.'.$i.'.student_id',array('type'=>'hidden','value'=>$student['Student']['id']));
			
			echo $this->Form->input('student.'.$i.'.updated_by',array('type'=>'hidden','value'=>$user_id));
			echo $this->Form->input('student.'.$i.'.prac_id',array('type'=>'hidden','value'=>$prac_id));
			echo "</tr>";
			$i++;
			}

			
		}

	?>
</table>
<?php
	echo $this->Form->input('Submit',array('type'=>'submit','label'=>false,'div'=>false,'class'=>'btn btn-sm btn-success'));
?>
<?php 
	$count=count($students); 
	$total=$students[1]['PraticalTest']['total_marks'];
?>
<script>
	var c="<?php echo $count; ?>";
	var max="<?php echo $total; ?>"
	console.log(c);
	console.log(max);
	for(var i=1;i<=c;i++){
		$("#mr"+i).focusout(function(){
			var m=$(this).val();
			if(m>max){
				console.log("Out of max error");				
				$(this).css('color','red')
			}
		});
		/*$("#mr"+i).focusin(function(){
			$(this).val("");
			$(this).css('color','black')
		});*/
		$("#mr"+i).blur(function(){
			console.log("event trig");
		})
	}
</script>