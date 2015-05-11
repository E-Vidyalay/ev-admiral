<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Standards</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Standard',array('controller'=>'Standards','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
	</div>
	<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>Standard</th><th>Section</th><th>Action</th>
	</tr>
	<?php foreach ($standards as $standard){ ?>
	<tr>
		<td> <?php  echo $standard['Standard']['standard']; ?> </td>
		<td> <?php  echo $standard['Standard']['section']; ?> </td>
		<td> <?php echo $this->Html->link('Update Standard',array('controller'=>'standards','action'=>'update',$standard['Standard']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Standard',array('controller'=>'standards','action'=>'delete',$standard['Standard']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>