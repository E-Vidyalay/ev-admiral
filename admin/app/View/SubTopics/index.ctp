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
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>SubTopic</th><th>Topics</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($subtopics as $subtopic){ ?>
						<tr>
							<td> <?php  echo $subtopic['SubTopic']['name']; ?> </td>
							<td><?php echo $subtopic['Topic']['name']; ?></td>
							<td> <?php echo $this->Html->link('Update SubTopic',array('controller'=>'SubTopics','action'=>'update',$subtopic['SubTopic']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo '<a id="'.$subtopic['SubTopic']['id'].'" class="btn btn-danger btn-sm delete">Delete SubTopic</a>';
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
