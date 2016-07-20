<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>External Links</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add new link',array('controller'=>'Links','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            External Links
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Link Title</th>
                           	<th>Subject/Topic</th>
                            <th>Sub Topic</th>
                           	<th>Updated on</th>
                           	<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($linkID as $l){ ?>
							<tr>
								<td data-title="Link Title"> <?php  echo $l['Link']['link_title']; ?> </td>
                                <td data-title="Subject/Topic"> <?php echo $l['Topic']['display_name']?></td>
                                <td data-title="Sub Topic"> <?php echo $l['SubTopic']['name']?></td>
								<td data-title="Updated on"> <?php  
                                    $date=date_create($l['Link']['updated_at']);
                                    echo date_format($date,"jS F Y h:i:s A"); ?> </td>
								<td data-title="Action"> <?php 
									echo $this->Html->link('Update link',array('controller'=>'Links','action'=>'update',$l['Link']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'));
                                    echo $this->Html->link('Update link',array('controller'=>'Links','action'=>'update',$l['Link']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'));
									echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$l['Link']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Link</a>';
                                    echo '<a id="'.$l['Link']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Link</a>';
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
