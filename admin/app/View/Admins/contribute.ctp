<br/>
<h3>Contribution</h3>
<ul class="nav nav-tabs">
  <li role="presentation" class="active" id="page_contri"><a href="#" >Pages</a></li>
  <li role="presentation" id="ebook_contri"><?php
                        echo $this->Html->link("Ebooks",array('controller' => 'admins', 'action' => 'contribute_ebook'),array('escape' => false));?></li>
  <li role="presentation" id="link_contri"><?php
                        echo $this->Html->link("Links",array('controller' => 'admins', 'action' => 'contribute_link'),array('escape' => false));?></li>
</ul>
<div class="row">
<div class="col-lg-12" id="data_contribute">
    <div class="panel panel-default" >
        <div class="panel-heading">
            Pages
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
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
								echo "<td data-title='Page Title'>".$a['Article']['title']."</td>";
								echo "<td data-title='Alias'>".$a['Article']['alias']."</td>";
								echo "<td data-title='Action'>";
                                    echo $this->Html->link('Approve',array('controller'=>'admins','action'=>'allow_page',$a['Article']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'));
									echo $this->Html->link('Allow',array('controller'=>'admins','action'=>'allow_page',$a['Article']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                    echo '<a id="'.$a['Article']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete</a>';
									echo '<a id="'.$a['Article']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete</a>';
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
</div>