<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Pages
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                           	<th>Page Title</th>
							<th>Alias</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							foreach ($articles as $a) {
								echo "<tr>";
								echo "<td>".$a['Article']['title']."</td>";
								echo "<td>".$a['Article']['alias']."</td>";
								echo "<td>";
									echo $this->Html->link('Update',array('controller'=>'articles','action'=>'update',$a['Article']['id']),array('class'=>'btn btn-primary btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";
									echo '<a id="'.$a['Article']['id'].'" class="btn btn-danger btn-sm delete">Delete</a>';
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