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
            Topics
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Level</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($topics as $topic){ ?>
						<tr>
                            <td data-title="id"> <?php  echo $topic['Topic']['id']; ?> </td>
							<td data-title="Topic"> <?php  echo $topic['Topic']['name']; ?> </td>
							<td data-title="Subject"><?php echo $topic['Subject']['name']; ?></td>
                            <td data-title="Level"><?php echo $topic['Level']['level_name']; ?></td>
							<td data-title="Action"> <?php echo $this->Html->link('Update Topic',array('controller'=>'topics','action'=>'update',$topic['Topic']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
                                echo $this->Html->link('Update Topic',array('controller'=>'topics','action'=>'update',$topic['Topic']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo '<a id="'.$topic['Topic']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Topic</a>';
                                echo '<a id="'.$topic['Topic']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Topic</a>';
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
