<br/>
<div class="row">
    <div class="col-lg-5">
        <h2>Literature Post</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
            <p style="margin-top: 20px"><?php echo $this->Html->link('Add New Post',array('controller'=>'LiteraturePosts','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
    </div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Literature Article
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($lpost as $a) {
                                echo "<tr>";
                                echo "<td>".$a['LiteraturePost']['title']."</td>";
                                echo "<td>".$a['Literature']['name']." - ".$a['SubLiterature']['name']."</td>";
                                echo "<td>";
                                    echo $this->Html->link('Update',array('controller'=>'LiteraturePosts','action'=>'update',$a['LiteraturePost']['id']),array('class'=>'btn btn-primary btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";

                                    echo '<a id="'.$a['LiteraturePost']['id'].'" class="btn btn-danger btn-sm delete">Delete</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;';

                                     echo $this->Html->link('View',array('controller'=>'LiteraturePosts','action'=>'view_posts',$a['LiteraturePost']['id']),array('class'=>'btn btn-info btn-sm'));
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