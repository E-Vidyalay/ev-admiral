<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>News </h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
		<p style="margin-top: 20px"><?php echo $this->Html->link('Add New News',array('controller'=>'News','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            News
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                        	<th>Sr. No.</th>
                           	<th>News </th>
							<th>Created on</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
						$count=1;
						foreach($news as $new){
							echo "<tr>";
								echo "<td>".$count."</td>";
								echo "<td>".$new['New']['desc']."</td>";
								echo "<td>";
					            echo $this->Html->link('Update News',array('controller'=>'News','action'=>'update',$new['New']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
								echo $this->Html->link('Delete News',array('controller'=>'News','action'=>'delete',$new['New']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "</td>";
								echo "</tr>";
								$count++;
						}
					?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>