<br/>
<h1>Standards</h1>
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
			echo $this->Html->link('Delete Subject',array('controller'=>'standards','action'=>'delete',$standard['Standard']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>