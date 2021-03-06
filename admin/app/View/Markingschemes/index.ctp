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
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                        	<th>id</th>
                           	<th>Sr no.</th>
							<th>Marking Scheme</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
						$count=1;
						foreach($markings as $marking){
							echo "<tr>";
								echo "<td data-title='id'>".$marking['Markingscheme']['id']."</td>";
								echo "<td data-title='Sr no.'>".$count."</td>";
								echo "<td data-title='Marking Scheme'>".$marking['Markingscheme']['display_name']."</td>";
								echo "<td data-title='Action'>";
					            echo $this->Html->link('Update Marking Scheme',array('controller'=>'Markingschemes','action'=>'update_marks',$marking['Markingscheme']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
					            echo $this->Html->link('Update Marking Scheme',array('controller'=>'Markingschemes','action'=>'update_marks',$marking['Markingscheme']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo '<a id="'.$marking['Markingscheme']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Marking Scheme</a>';
								echo '<a id="'.$marking['Markingscheme']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Marking Scheme</a>';
								echo "</td>";
								echo "</tr>";
								$count++;
						}
					?>
                    </tbody>
                </table>
                <br>
                <button class="btn btn-danger" id="getdbutton"><i class="fa fa-trash fa-fw"></i>Delete Selection</button>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>
</div>