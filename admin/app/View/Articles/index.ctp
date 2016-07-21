<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Pages
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                           	<th>Page Title</th>
							<th>Alias</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							foreach ($articles as $a) {
								echo "<tr>";
                                echo "<td data-title='id'>".$a['Article']['id']."</td>";
								echo "<td data-title='Page Title'>".$a['Article']['title']."</td>";
								echo "<td data-title='Alias'>".$a['Article']['alias']."</td>";
								echo "<td data-title='Action'>";
                                    echo $this->Html->link('Update',array('controller'=>'articles','action'=>'update',$a['Article']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'));
									echo $this->Html->link('Update',array('controller'=>'articles','action'=>'update',$a['Article']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$a['Article']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete</a>';
									echo '<a id="'.$a['Article']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete</a>';
								echo "</td>";
								echo "</tr>";
							}
						?>
                    </tbody>
                </table>
                <br>
                <button class="btn btn-danger" id="getdbutton"><i class="fa fa-trash fa-fw"></i>Delete Selection</button>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>