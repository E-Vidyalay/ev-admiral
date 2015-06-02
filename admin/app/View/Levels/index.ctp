<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Levels</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Level',array('controller'=>'levels','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Levels
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           <th>Level</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($levels as $level){ ?>
						<tr>
							<td> <?php  echo $level['Level']['level_name']; ?> </td>			
							<td> <?php echo $this->Html->link('Update Level',array('controller'=>'levels','action'=>'update',$level['Level']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Level',array('controller'=>'levels','action'=>'delete',$level['Level']['id']),array('class'=>'btn btn-danger btn-sm'));
							?>
							</td> 
						</tr> 	
						<?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>
</div>
