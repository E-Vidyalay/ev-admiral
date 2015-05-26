<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Subjects</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Subject',array('controller'=>'Subjects','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
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
                           <th>Subject</th><th>Standard</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($subjects as $subject){ ?>
						<tr>
							<td> <?php  echo $subject['Subject']['name']; ?> </td>
							<td><?php echo $subject['Standard']['standard']; ?></td>			
							<td> <?php echo $this->Html->link('Update Subject',array('controller'=>'subjects','action'=>'update',$subject['Subject']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Subject',array('controller'=>'subjects','action'=>'delete',$subject['Subject']['id']),array('class'=>'btn btn-sm btn-primary'));
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
