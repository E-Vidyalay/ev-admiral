<br/>
<<<<<<< HEAD
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
=======
<h1>Question Bank</h1>
<hr>
<?php

echo $questions['option1'];
    /*echo $this->Form->create('QuestionBank',array('controller'=>'questionbanks','action'=>'update'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('standard_id',array(
        'class'=>'form-control',
        'type'=> 'select',
        'options' => $stand,
        'label' => 'Standard'
    ));
    echo "<br/>";
    echo $this->Form->input('name',array(
     'class'=>'form-control',
     'placeholder'=>'Name',
     'type'=>'text',
     'required',
     'autofocus',
     'label'=>'Subject'
      ));
    echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
    echo "<br/>";
    
    echo $this->Form->input('update subject',array(
     'type'=>'submit',
     'div'=>false,
     'label'=>false,
     'class'=>'btn btn-lg btn-success btn-block'
     ));   */                            

?>
>>>>>>> 0f494a323a48db352cb85473d485d00c55721da7
