<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Literature - Sub Category</h2>
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
           Literature - Sub Categories
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Sub category</th><th>Category</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($subliteratures as $subliterature){ ?>
						<tr>
							<td data-title="Sub category"> <?php  echo $subliterature['SubLiterature']['name']; ?> </td>
							<td data-title="Category"><?php echo $subliterature['Literature']['name']; ?></td>
							<td data-title="Action"> <?php echo $this->Html->link('Update Sub Literature',array('controller'=>'SubLiteratures','action'=>'update',$subliterature['SubLiterature']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
                                echo $this->Html->link('Update Sub Literature',array('controller'=>'SubLiteratures','action'=>'update',$subliterature['SubLiterature']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo '<a id="'.$subliterature['SubLiterature']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Sub Literature</a>';
                                echo '<a id="'.$subliterature['SubLiterature']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Sub Literature</a>';
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
