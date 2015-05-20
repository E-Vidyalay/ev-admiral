<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Links</h2>
	</div>
	
</div>
<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>SubTopics</th><th>Action</th>
	</tr>
	<?php foreach ($linkID as $l){ ?>
	<tr>
		<td> <?php  echo $l['SubTopic']['subtopic_name']; ?> </td>			
		<td> <?php echo $this->Html->link('Add Link',array('controller'=>'links','action'=>'insert',$l['SubTopic']['id'],$l['SubTopic']['subtopic_name']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Update link',array('controller'=>'Links','action'=>'update',$l['Link']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Link',array('controller'=>'Links','action'=>'delete',$l['Link']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>