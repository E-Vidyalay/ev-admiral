<br/>
<div class="row">
    <div class="col-lg-5">
        <h2>Information Post</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
            <p style="margin-top: 20px"><?php echo $this->Html->link('Add New Post',array('controller'=>'InformationPosts','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
    </div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Information Article
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($Ipost as $a) {
                                echo "<tr>";
                                echo "<td>".$a['InformationPost']['title']."</td>";
                                echo "<td>";
                                    echo $this->Html->link('Update',array('controller'=>'InformationPosts','action'=>'update',$a['InformationPost']['id']),array('class'=>'btn btn-primary btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";

                                    echo '<a id="'.$a['InformationPost']['id'].'" class="btn btn-danger btn-sm delete">Delete</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;';

                                     echo $this->Html->link('View',array('controller'=>'InformationPosts','action'=>'view_posts',$a['InformationPost']['id']),array('class'=>'btn btn-info btn-sm'));
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