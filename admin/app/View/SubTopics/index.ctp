<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>SubTopics</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New SubTopic',array('controller'=>'SubTopics','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Sub Topics
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>SubTopic</th>
                            <th>Topics</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($subtopics as $subtopic){ ?>
						<tr>
                            <td data-title="id"> <?php  echo $subtopic['SubTopic']['id']; ?> </td>
							<td data-title="SubTopic"> <?php  echo $subtopic['SubTopic']['name']; ?> </td>
							<td data-title="Topics"><?php echo $subtopic['Topic']['name']; ?></td>
							<td data-title="Action"> <?php echo $this->Html->link('Update SubTopic',array('controller'=>'SubTopics','action'=>'update',$subtopic['SubTopic']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
                                echo $this->Html->link('Update SubTopic',array('controller'=>'SubTopics','action'=>'update',$subtopic['SubTopic']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo '<a id="'.$subtopic['SubTopic']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete SubTopic</a>';
                                echo '<a id="'.$subtopic['SubTopic']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete SubTopic</a>';
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
