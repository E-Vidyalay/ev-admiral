<script>
	$(document).ready(function () {
        if($("#prac_chk").prop("checked")){
        	 $('#prac_mrks').removeAttr('disabled');
        }
        $('#prac_chk').click(function(){
            if($(this).prop("checked")) {
                $('#prac_chk').prop("checked", true);
                $('#prac_mrks').removeAttr('disabled');
                $('#prac_mrks').attr('required','required');
            } else {
                $('#prac_chk').prop("checked", false);
                 $('#prac_mrks').attr('disabled','disabled');
                 $('#prac_mrks').val("Enter Practical Test Marks");
            }                
        });
    });
</script>
<br/>
<h2> Step 1: Enter Test details</h2>
<div class="well">
	<?php
		echo $this->Form->create('Test',array('conroller'=>'tests','action'=>'create_test'));
		echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$user_id));
		echo $this->Form->input('name',array(
			'type'=>'text',
			'class'=>'form-control',
			'placeholder'=>'Enter name for Test',
			'label'=>false,
			'required'
		));
		echo "<br/>";
		echo $this->Form->input('subject_id',array(
			'options'=>$subjects,
			'class'=>'form-control',
			'label'=>false,
			'div'=>false,
			'empty'=>'Select Subject',
			'required'
			
		));
		echo "<br/>";
		echo $this->Form->input('marking_scheme_id',array(
			'options'=>$marking_scheme,
			'class'=>'form-control',
			'label'=>false,
			'div'=>false,
			'empty'=>'Select Marking',
			'required'
			
		));
		echo "<br/>";
		echo $this->Form->input('date',array(
				'type'=>'text',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>'Select Test Date',
				'div'=>false,
				'id'=>'datepicker',
				'required'
			));
		echo "<br/>";
		echo $this->Form->input('prac_chk',array(
				'type'=>'checkbox',
				'deafault'=>0,
				'value'=>1,
				'label'=>'&nbsp;&nbsp;Include Practical Exam',				
				'div'=>false,
				'id'=>'prac_chk'				
				
			));
		echo "<br/>";
		echo $this->Form->input('prac_mrks',array(
				'type'=>'text',
				'placeholder'=>'Total Marks For Practical Exam',
				'class'=>'form-control',
				'label'=>false,				
				'div'=>false,
				'id'=>'prac_mrks',			
				'disabled'
			));
		echo "<br/>";
		echo $this->Form->input('start_time',array(
			'type'=>'time',
			'class'=>'form-control',
			'style'=>'width:10%;display:inline',
			'label'=>'Start time : ',
			'required'
		));
		echo "<br/>";
		echo $this->Form->input('end_time',array(
			'type'=>'time',
			'class'=>'form-control',
			'style'=>'width:10%;display:inline',
			'label'=>'End time :&nbsp&nbsp',
			'required'
		));
		echo "<br/>";
		echo '<div class="input-group">';
		echo $this->Form->input('test_timer',array(
			'type'=>'Number',
			'class'=>'form-control',
			'style'=>'width:100%;display:inline',
			'label'=>false,
			'placeholder'=>'Test time',
			'div'=>false,
			'required'
		));
		echo '<span class="input-group-addon">Minutes</span>';
		echo "</div>";
		echo "<br/>";
		echo $this->Form->input('question_limit',array(
			'type'=>'number',
			'class'=>'form-control',
			'placeholder'=>'Enter question limit (eg. 30)',
			'label'=>false,
			'required'
		));
		echo "<br/>";
		echo $this->Form->input('Proceed',array(
			'type'=>'submit',
			'div'=>false,
			'label'=>false,
			'class'=>'btn btn-success'
		));
	?>
</div>
