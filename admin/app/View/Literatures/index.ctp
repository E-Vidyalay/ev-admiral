<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Literatures</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Literature',array('controller'=>'Literatures','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Literatures
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Literature</th><th>Level</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($literatures as $literature){ ?>
						<tr>
							<td> <?php  echo $literature['Literature']['name']; ?> </td>
							<td><?php echo $literature['Level']['level_name']; ?></td>
							<td> <?php echo $this->Html->link('Update Literature',array('controller'=>'Literatures','action'=>'update',$literature['Literature']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Literature',array('controller'=>'Literatures','action'=>'delete',$literature['Literature']['id']),array('class'=>'btn btn-sm btn-primary'));
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