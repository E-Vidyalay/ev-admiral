<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Ebooks
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Level</th>
                            <th>Author</th>
                            <th>Compilated by(સંકલન)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($books as $a) {
                                echo "<tr>";
                                echo "<td data-title='Title'>".$a['Ebook']['name']."</td>";
                                echo "<td data-title='Category'>".$a['Literature']['name']." - ".$a['SubLiterature']['name']."</td>";
                                echo "<td data-title='Level'>".$a['Level']['level_name']."</td>";
                                if($a['Ebook']['author']!=null){
                                    echo "<td data-title='Author'>".$a['Ebook']['author']."</td>";
                                }
                                else{
                                    echo "<td data-title='Author'>No Author added</td>";
                                }
                                if($a['Ebook']['compiler']!=null){
                                    echo "<td data-title='Compilated by'>".$a['Ebook']['compiler']."</td>";
                                }
                                else{
                                    echo "<td data-title='Compilated by'>No Compiler(સંકલન) added</td>";   
                                }
                                echo "<td data-title='Action'>";
                                    echo $this->Html->link('Update',array('controller'=>'ebooks','action'=>'update',$a['Ebook']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'));
                                    echo $this->Html->link('Update',array('controller'=>'ebooks','action'=>'update',$a['Ebook']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$a['Ebook']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete</a>';
                                    echo '<a id="'.$a['Ebook']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                                    if($a['Ebook']['contributed']==0){
                                        echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info visible-xs'>View book</a>";
                                        echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info hidden-xs'>View book</a>";    
                                    }
                                    else{
                                        echo "<a target='_blank' href='".$evsite_url."files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info visible-xs'>View book</a>";
                                        echo "<a target='_blank' href='".$evsite_url."files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info hidden-xs'>View book</a>";
                                    }
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