<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Marking Scheme</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Marking Scheme',array('controller'=>'markingschemes','action'=>'add_scheme'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
	<table class="table table-bordered table-striped">
		<tr>
			<th>Sr no. </th>
			<th>Marking Scheme</th>
			<th>Actions</th>
		</tr>
		<?php
			$f=1;
			foreach($schemes as $scheme){
				echo "<tr>";
					echo "<td>".$f."</td>";
					echo "<td>".$scheme['Markingscheme']['display_name']."</td>";
					echo "<td>";
		            echo $this->Html->link('Update Marking Scheme',array('controller'=>'markingschemes','action'=>'update_scheme',$scheme['Markingscheme']['id']),array('class'=>'btn btn-primary'));
					echo "&nbsp;&nbsp;&nbsp;&nbsp;";
					echo $this->Html->link('Delete Marking Scheme',array('controller'=>'Markingschemes','action'=>'delete_scheme',$scheme['Markingscheme']['id']),array('class'=>'btn btn-primary'));
					echo "</td>";
					echo "</tr>";
					$f++;
			}
		?>
	</table>	

