<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Sub Literatures</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Sub Category',array('controller'=>'SubLiteratures','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Sub Literatures
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Sub Literature</th><th>Literature</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($subliteratures as $subliterature){ ?>
						<tr>
							<td> <?php  echo $subliterature['SubLiterature']['name']; ?> </td>
							<td><?php echo $subliterature['Literature']['name']; ?></td>
							<td> <?php echo $this->Html->link('Update Sub Literature',array('controller'=>'SubLiteratures','action'=>'update',$subliterature['SubLiterature']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete Sub Literature',array('controller'=>'SubLiteratures','action'=>'delete',$subliterature['SubLiterature']['id']),array('class'=>'btn btn-sm btn-primary'));
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
