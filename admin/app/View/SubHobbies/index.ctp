<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Hobby - Sub Category</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Sub Category',array('controller'=>'SubHobbies','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Hobby - Sub Categories
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Sub category</th><th>Category</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($subhobbies as $subhobby){ ?>
						<tr>
							<td> <?php  echo $subhobby['SubHobby']['name']; ?> </td>
							<td><?php echo $subhobby['Hobby']['name']; ?></td>
							<td> <?php echo $this->Html->link('Update Sub Hobby',array('controller'=>'SubHobbies','action'=>'update',$subhobby['SubHobby']['id']),array('class'=>'btn btn-sm btn-primary'));
								echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo '<a id="'.$subhobby['SubHobby']['id'].'" class="btn btn-danger btn-sm delete">Delete Sub Hobby</a>';
							?>
							</td> 
						</tr> 	
						<?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>
</div>