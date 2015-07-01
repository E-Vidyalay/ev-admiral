<br/>
<h3>Contribution</h3>
<ul class="nav nav-tabs">
  <li role="presentation" id="page_contri"><?php
                        echo $this->Html->link("Pages",array('controller' => 'admins', 'action' => 'contribute'),array('escape' => false));?></li>
  <li role="presentation" id="ebook_contri" class="active"><a href="#" >Ebooks</a></li>
  <li role="presentation" id="link_contri"><?php
                        echo $this->Html->link("Links",array('controller' => 'admins', 'action' => 'contribute_link'),array('escape' => false));?></li>
</ul>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default" >
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($books as $a) {
                                echo "<tr>";
                                echo "<td data-title='Title'>".$a['Ebook']['name']."</td>";
                                echo "<td data-title='Category'>".$a['Literature']['name']." - ".$a['SubLiterature']['name']."</td>";
                                echo "<td data-title='ACtion'>";
                                    echo $this->Html->link('Approve',array('controller'=>'Admins','action'=>'allow_ebook',$a['Ebook']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'));
                                    echo $this->Html->link('Approve',array('controller'=>'Admins','action'=>'allow_ebook',$a['Ebook']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$a['Ebook']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete</a>';
                                    echo '<a id="'.$a['Ebook']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                                    echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info visible-xs'>View book</a>";
                                    echo "<a target='_blank' href='".$this->webroot."files/ebook/path/".$a['Ebook']['id']."/".$a['Ebook']['path']."' class='btn-sm btn btn-info hidden-xs'>View book</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        </div>
        </div>
</div>