<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Topics</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Topic',array('controller'=>'Topics','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
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
                            <th>Topic</th><th>Subject</th><th>Level</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($topics as $topic){ ?>
						<tr>
							<td> <?php  echo $topic['Topic']['name']; ?> </td>
							<td><?php echo $topic['Subject']['name']; ?></td>
                            <td><?php echo $topic['Level']['level_name']; ?></td>
							<td> <?php echo $this->Html->link('Update Topic',array('controller'=>'topics','action'=>'update',$topic['Topic']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Topic',array('controller'=>'Topics','action'=>'delete',$topic['Topic']['id']),array('class'=>'btn btn-sm btn-primary'));
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
