<script>
	$(document).ready(function () {
        
        $('.checktoggle').click(function(){
            if($(this).prop("checked")) {
                $(".checkBoxClass").prop("checked", true);
            } else {
                $(".checkBoxClass").prop("checked", false);
            }                
        });
    });
</script>
<br/>
<h2>Select the students for test</h2>
<hr/>
<?php
	echo $this->Form->create('TestStudentMapping');
	echo $this->Form->input('test_id',array('type'=>'hidden','value'=>$test_id));
	echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$user_id));
	/*echo $this->Form->input('password',array(
		'type'=>'password',
		'class'=>'form-control',
		'placeholder'=>'Enter password for the test',
		'label'=>false
	));*/
?>
<br/>
<table class="table table-borderd table-striped">
	<tr>
		<th><input type="checkbox" class="checktoggle"/> Select All</th>
		
	</tr>
	<?php
		$i=0;
		foreach($students as $student){
			echo "<tr>";
			echo "<td>";
			echo $this->Form->input('TestStudentMapping.Student.'.$i,array(
				'type'=>'checkbox',
				'label'=>$student['Student']['first_name']." ".$student['Student']['last_name'],
				'value'=>$student['Student']['id'],
				'class'=>'checkBoxClass'
			));
			echo "</td>";
			
			echo "</tr>";
			$i++;
		}
		?>
			
</table>
<?php
		echo $this->Form->input('Proceed',array(
			'type'=>'submit',
			'div'=>false,
			'label'=>false,
			'class'=>'btn btn-success'
		));
?>