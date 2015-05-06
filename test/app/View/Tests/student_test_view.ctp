<?php
$time_d=explode(":", $time_diff);
?>

<br/>
<h1>Test</h1>
<div class="pull-right"> 
                
<span id="hms_timer"></span>
                             
<script>
	//var hr="<?php echo $time_d[0] ; ?>"
	// hours :"<?php echo $time_d[0] ; ?>",
    $(function(){
        $('#hms_timer').countdowntimer({
            
            minutes :"<?php echo $time_diff ; ?>",
           
            size : "lg"

        });
    });
    function chk(){
    	var a=$("#hms_timer").html();

    	if(a=="00:00"){
    		$("#test_form").submit();
    		console.log("submited");
    		
    	}
    	
    	setTimeout(function(){chk();},1000);
    }
    $(document).ready(function(){
    	chk();
    	
    })
</script>
</div>
<hr/>
<?php
//pr($time_diff);

if(date('H:i:s')>date('H:i:s',strtotime($test_dt['Test']['end_time'])))	{
	echo "<h3>Sorry test is no more available  ... :(</h3>";
}
else{
echo $this->Form->create('Test',array('id'=>'test_form'));
$i=0;
foreach ($questions as $question) {?>
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
				<td> <b><?php echo $this->Form->input('Question.'.$i.'.ans.1',array('type'=>'checkbox','label'=>false,'value'=>'option1')) ?></b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option1']."</p>";?></td>
			</tr>
			<tr>
				<td> <b><?php echo $this->Form->input('Question.'.$i.'.ans.2',array('type'=>'checkbox','label'=>false,'value'=>'option2')) ?> </b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option2']."</p>";?></td>
			</tr>
			<tr>
				<td> <b><?php echo $this->Form->input('Question.'.$i.'.ans.3',array('type'=>'checkbox','label'=>false,'value'=>'option3')) ?></b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option3']."</p>";?></td>
			</tr>
			<tr>
				<td> <b><?php echo $this->Form->input('Question.'.$i.'.ans.4',array('type'=>'checkbox','label'=>false,'value'=>'option4')) ?></b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option4']."</p>";?></td>
			</tr>
			<tr>
				<td> <b><?php echo $this->Form->input('Question.'.$i.'.ans.5',array('type'=>'checkbox','label'=>false,'value'=>'option5')) ?></b>&nbsp;&nbsp;</td>
				<td><?php echo "<p style='padding-top:2px;'>".$question['QuestionBank']['option5']."</p>";?></td>
			</tr>
		</table>

</div>

</div>
<?php echo $this->Form->input('Question.'.$i.'.question_id',array('type'=>'hidden','value'=>$question['QuestionBank']['id'])); ?>
<?php echo $this->Form->input('Question.'.$i.'.correct_ans',array('type'=>'hidden','value'=>$question['QuestionBank']['correct_ans'])); ?>
<?php $i++; } ?>
<?php
	echo $this->Form->input('Submit', array('type'=>'submit','class'=>'btn btn-success','label'=>false));
}
?>