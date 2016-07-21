<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Standards</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
        <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Standard',array('controller'=>'standards','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
        <?php }?>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Standards
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Standard</th>
                            <th>Level</th>
                            <?php
                            if($activeUser['User']['AdminType']['name']=='Administrator'){?>
                           <th>Action</th>
                           <?php }?>
                    </thead>
                    <tbody>
                    <?php foreach ($standards as $standard){ ?>
						<tr>
                            <td data-title="id"> <?php echo $standard['Standard']['id']; ?> </td>
							<td data-title="Standard"> <?php echo $standard['Standard']['name']; ?> </td>			
                            <td data-title="Level"> <?php  echo $standard['Level']['level_name']; ?> </td>
                            <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
							<td data-title="Action"> <?php 
                                echo $this->Html->link('Update Standard',array('controller'=>'standards','action'=>'update',$standard['Standard']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
                                echo $this->Html->link('Update Standard',array('controller'=>'standards','action'=>'update',$standard['Standard']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo '<a id="'.$standard['Standard']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Standard</a>';
                                echo '<a id="'.$standard['Standard']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Standard</a>';
							?>
							</td> 
                            <?php }?>
						</tr> 	
						<?php } ?>
                    </tbody>
                </table>
                <br>
                <button class="btn btn-danger" id="getdbutton"><i class="fa fa-trash fa-fw"></i>Delete Selection</button>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>
</div>
