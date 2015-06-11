<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Ebooks
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
                            foreach ($books as $a) {
                                echo "<tr>";
                                echo "<td>".$a['Ebook']['name']."</td>";
                                echo "<td>".$a['Literature']['name']." - ".$a['SubLiterature']['name']."</td>";
                                echo "<td>";
                                    echo $this->Html->link('Update',array('controller'=>'ebooks','action'=>'update',$a['Ebook']['id']),array('class'=>'btn btn-primary btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo $this->Html->link('Delete',array('controller'=>'ebooks','action'=>'delete',$a['Ebook']['id']),array('class'=>'btn btn-danger btn-sm'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo "<a target='_blank' href='".$this->webroot."/files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info'>View book</a>";
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