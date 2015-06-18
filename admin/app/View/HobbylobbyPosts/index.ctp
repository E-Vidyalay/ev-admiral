<br/>
<div class="row">
    <div class="col-lg-5">
        <h2>Hobby Lobby Post</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
            <p style="margin-top: 20px"><?php echo $this->Html->link('Add New Post',array('controller'=>'HobbylobbyPosts','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
    </div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Hobby Lobby Post
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           	<th>News Title</th>
                            <th>Date</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							foreach ($hobbylobbypost as $hl) {
								echo "<tr>";
								echo "<td>".$hl['HobbylobbyPost']['title']."</td>";
                                echo "<td>".$hl['HobbylobbyPost']['updated_at']."</td>";
								echo "<td>";
									echo $this->Html->link('Update',array('controller'=>'HobbylobbyPosts','action'=>'update',$hl['HobbylobbyPost']['id']),array('class'=>'btn btn-primary btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";
									echo '<a id="'.$hl['HobbylobbyPost']['id'].'" class="btn btn-danger btn-sm delete">Delete</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo $this->Html->link('View',array('controller'=>'HobbylobbyPosts','action'=>'view_posts',$hl['HobbylobbyPost']['id']),array('class'=>'btn btn-info btn-sm'));
								echo "</td>";
								echo "</tr>";
							}
						?>
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