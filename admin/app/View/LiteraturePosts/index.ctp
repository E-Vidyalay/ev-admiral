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
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Post Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($lpost as $a) {
                                echo "<tr>";
                                echo "<td data-title='id'>".$a['LiteraturePost']['id']."</td>";
                                echo "<td data-title='Post Title'>".$a['LiteraturePost']['title']."</td>";
                                echo "<td data-title='Category'>".$a['Literature']['name']." - ".$a['SubLiterature']['name']."</td>";
                                echo "<td data-title='Action'>";
                                    echo $this->Html->link('Update',array('controller'=>'LiteraturePosts','action'=>'update',$a['LiteraturePost']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'));
                                    echo $this->Html->link('Update',array('controller'=>'LiteraturePosts','action'=>'update',$a['LiteraturePost']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$a['LiteraturePost']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete</a>';
                                    echo '<a id="'.$a['LiteraturePost']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo $this->Html->link('View',array('controller'=>'LiteraturePosts','action'=>'view_posts',$a['LiteraturePost']['id']),array('class'=>'btn btn-info btn-sm hidden-xs'));
                                     echo $this->Html->link('View',array('controller'=>'LiteraturePosts','action'=>'view_posts',$a['LiteraturePost']['id']),array('class'=>'btn btn-info btn-sm visible-xs'));
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