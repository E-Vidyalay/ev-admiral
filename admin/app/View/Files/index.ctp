<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Uploaded Files</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add new File',array('controller'=>'Files','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Uploaded Files
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           	<th>Subject</th>
                           	<th>Description</th>
                            <th>File Type</th>
                           	<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($all_file as $l){ ?>
							<tr>
								<td> <?php  echo $l['Subject']['display_name']; ?> </td>
								<td> <?php  echo $l['File']['tags']; ?> </td>
                                <td> <?php  echo $l['File']['file_type']; ?> </td>		
								<td> <?php 
                                    echo $this->Html->link('View File','/files/file/file/'.$l['File']['id'].DS.$l['File']['file'],array('class'=>'btn btn-primary btn-sm'));
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
									echo $this->Html->link('Delete File',array('controller'=>'Files','action'=>'delete',$l['File']['id']),array('class'=>'btn btn-primary btn-sm'));
								?>
								</td> 
							</tr> 	
						<?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>