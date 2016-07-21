<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Images</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Images',array('controller'=>'images','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Images
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           <th>id</th>
                           <th>Image</th>
                           <th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($Images as $image){ 
                        
                        ?>
                    
						<tr>
                            <td data-title="id"><?php echo $image['Image']['id']; ?></td>
                            <td data-title="Image"><?php echo '<img src="'.$this->webroot.'files/image/path/'.$image['Image']['id'].'/'.$image['Image']['path'].'" class="usr-img" style="height:100px;width:100px"/ > ';?></td>
							<td data-title="Action"> 
                            <?php 
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo '<a id="'.$image['Image']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Image</a>';
                                echo '<a id="'.$image['Image']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Image</a>';
							?>
							</td> 
						</tr> 	
						<?php } ?>
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
