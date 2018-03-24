<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Thoughts</h2>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Thoughts
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                           <th>Thought</th>
                           <th>Thinker</th>
                           <th>Posted on</th>
                            <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
                           <th>Action</th>
                           <?php }?>
                    </thead>
                    <tbody>
                    <?php foreach ($thoughts as $thought){ ?>
						<tr>
                            <td data-title="id"><?php  echo $thought['Thought']['id']; ?></td>
							<td data-title="Thought"> <?php  echo $thought['Thought']['thought']; ?> </td>
                            <td data-title="Thinker"> <?php  echo $thought['Thought']['thinker']; ?> </td>
                            <td data-title="Posted on"> <?php  echo $thought['Thought']['date']; ?> </td>		<?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
							<td data-title="Action"> <?php 
                                // echo $this->Html->link('Update Level',array('controller'=>'levels','action'=>'update',$thought['Level']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
                                // echo $this->Html->link('Update Level',array('controller'=>'levels','action'=>'update',$thought['Level']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo '<a id="'.$thought['Thought']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete Thought</a>';
                                echo '<a id="'.$thought['Thought']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete Thought</a>';
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
