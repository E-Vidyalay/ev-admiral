<br/>
<h1>Pages</h1>
<hr/>
<table class="table table-bordered table-striped">
<tr>
	<th>Page Title</th>
	<th>Alias</th>
	<th>Action</th>
</tr>
<?php
	foreach ($articles as $a) {
		echo "<tr>";
		echo "<td>".$a['Article']['title']."</td>";
		echo "<td>".$a['Article']['alias']."</td>";
		echo "<td>";
			echo $this->Html->link('Update',array('controller'=>'articles','action'=>'update',$a['Article']['id']),array('class'=>'btn btn-info'))."&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete',array('controller'=>'articles','action'=>'delete',$a['Article']['id']),array('class'=>'btn btn-danger'));
		echo "</td>";
		echo "</tr>";
	}
?>
</table>