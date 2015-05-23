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
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            External Links
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           	<th>Subject</th>
                           	<th>Description</th>
                           	<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($linkID as $l){ ?>
							<tr>
								<td> <?php  echo $l['Subject']['display_name']; ?> </td>
								<td> <?php  echo $l['Link']['tags']; ?> </td>		
								<td> <?php 
									echo $this->Html->link('Update link',array('controller'=>'Links','action'=>'update',$l['Link']['id']),array('class'=>'btn btn-primary btn-sm'));
									echo "&nbsp;&nbsp;&nbsp;&nbsp;";
									echo $this->Html->link('Delete Link',array('controller'=>'Links','action'=>'delete',$l['Link']['id']),array('class'=>'btn btn-primary btn-sm'));
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

		<h2>Links</h2>
	</div>
	
</div>
<hr/>
<table width="100%" class="table table-striped table-bordered">
	<tr>
		<th>SubTopics</th><th>Action</th>
	</tr>
	<?php foreach ($linkID as $l){ ?>
	<tr>
		<td> <?php  echo $l['SubTopic']['subtopic_name']; ?> </td>			
		<td> <?php echo $this->Html->link('Add Link',array('controller'=>'links','action'=>'insert',$l['SubTopic']['id'],$l['SubTopic']['subtopic_name']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Update link',array('controller'=>'Links','action'=>'update',$l['Link']['id']),array('class'=>'btn btn-primary'));
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			echo $this->Html->link('Delete Link',array('controller'=>'Links','action'=>'delete',$l['Link']['id']),array('class'=>'btn btn-primary'));
		?>
		</td> 
	</tr> 	
	<?php } ?>
</table>

