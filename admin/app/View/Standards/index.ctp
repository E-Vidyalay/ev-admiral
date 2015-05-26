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
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Standards
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           <th>Standard</th><th>Section</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($standards as $standard){ ?>
						<tr>
							<td> <?php  echo $standard['Standard']['standard']; ?> </td>
							<td> <?php  echo $standard['Standard']['section']; ?> </td>
							<td> <?php echo $this->Html->link('Update Standard',array('controller'=>'standards','action'=>'update',$standard['Standard']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Standard',array('controller'=>'standards','action'=>'delete',$standard['Standard']['id']),array('class'=>'btn btn-sm btn-primary'));
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