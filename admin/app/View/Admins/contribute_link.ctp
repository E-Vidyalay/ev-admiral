<br/>
<h3>Contribution</h3>
<ul class="nav nav-tabs">
  <li role="presentation" id="ebook_contri"><?php
                        echo $this->Html->link("Ebooks",array('controller' => 'admins', 'action' => 'contribute_ebook'),array('escape' => false));?></li>
  <li role="presentation" id="link_contri" class="active"><a href="#">Links</a></li>
</ul>
<div class="row">
<div class="col-lg-12" id="data_contribute">
<div class="panel panel-default">
        <div class="panel-heading">
            External Links
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Link Title</th>
                           	<th>Subject/Topic</th>
                           	<th>Description</th>
                           	<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php foreach ($linkID as $l){ ?>
							<tr>
								<td data-title="Link Title"> <?php  echo $l['Link']['link_title']; ?> </td>
                                <td data-title="Subject/Topic"> <?php echo $l['Topic']['display_name']?></td>
								<td data-title="Description"> <?php  echo $l['Link']['tags']; ?> </td>		
								<td data-title="Action"> <?php 
									echo $this->Html->link('View for Approval',array('controller'=>'Admins','action'=>'approval_link',$l['Link']['id'],$l['Link']['uploaded_by']),array('class'=>'btn btn-primary btn-sm hidden-xs'));
                                    echo $this->Html->link('View for Approval',array('controller'=>'Admins','action'=>'approval_link',$l['Link']['id'],$l['Link']['uploaded_by']),array('class'=>'btn btn-primary btn-sm visible-xs'));
								?>
								</td> 
							</tr> 	
						<?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    </div>
</div>