<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            News Letters
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
							foreach ($news as $n) {
								echo "<tr>";
								echo "<td>".$n['NewsLetter']['title']."</td>";
                                echo "<td>".$n['NewsLetter']['date']."</td>";
								echo "<td>";
									echo $this->Html->link('Update',array('controller'=>'NewsLetters','action'=>'update',$n['NewsLetter']['id']),array('class'=>'btn btn-primary btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";
									echo $this->Html->link('Delete',array('controller'=>'NewsLetters','action'=>'delete',$n['NewsLetter']['id']),array('class'=>'btn btn-danger btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo $this->Html->link('View',array('controller'=>'NewsLetters','action'=>'view_news',$n['NewsLetter']['id']),array('class'=>'btn btn-info btn-sm'));
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