<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Marking Scheme</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Marking Scheme',array('controller'=>'Markingschemes','action'=>'add_marks'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Marking Scheme
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           	<th>Sr no. </th>
							<th>Marking Scheme</th>
							<th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
						$count=1;
						foreach($markings as $marking){
							echo "<tr>";
								echo "<td>".$count."</td>";
								echo "<td>".$marking['Markingscheme']['display_name']."</td>";
								echo "<td>";
					            echo $this->Html->link('Update Marking Scheme',array('controller'=>'Markingschemes','action'=>'update_marks',$marking['Markingscheme']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Marking Scheme',array('controller'=>'Markingschemes','action'=>'delete_marks',$marking['Markingscheme']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "</td>";
								echo "</tr>";
								$count++;
						}
					?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>
</div>