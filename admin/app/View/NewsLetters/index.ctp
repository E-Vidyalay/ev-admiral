<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            News Letters
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                           	<th>News Title</th>
                            <th>Date</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
							foreach ($news as $n) {
								echo "<tr>";
                                echo "<td data-title='id'>".$n['NewsLetter']['id']."</td>";
								echo "<td data-title='News Title'>".$n['NewsLetter']['title']."</td>";
                                echo "<td data-title='Date'>".$n['NewsLetter']['date']."</td>";
								echo "<td data-title='Action'>";
									echo $this->Html->link('Update',array('controller'=>'NewsLetters','action'=>'update',$n['NewsLetter']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'));
                                    echo $this->Html->link('Update',array('controller'=>'NewsLetters','action'=>'update',$n['NewsLetter']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$n['NewsLetter']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete</a>';
									echo '<a id="'.$n['NewsLetter']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo $this->Html->link('View',array('controller'=>'NewsLetters','action'=>'view_news',$n['NewsLetter']['id']),array('class'=>'btn btn-info btn-sm hidden-xs'));
                                    echo $this->Html->link('View',array('controller'=>'NewsLetters','action'=>'view_news',$n['NewsLetter']['id']),array('class'=>'btn btn-info btn-sm visible-xs'));
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