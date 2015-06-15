<br/>
<div class="row">
    <div class="col-lg-5">
        <h2>Hobby Category</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
            <p style="margin-top: 20px"><?php echo $this->Html->link('Add New Category',array('controller'=>'Hobbies','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
    </div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
           Hobby Category
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Category</th><th>Level</th><th>Action</th>
                    </thead>
                    <tbody>
                    <?php foreach ($hobbies as $hobby){ ?>
                        <tr>
                            <td> <?php  echo $hobby['Hobby']['name']; ?> </td>
                            <td><?php echo $hobby['Level']['level_name']; ?></td>
                            <td> <?php echo $this->Html->link('Update Hobby',array('controller'=>'Hobbies','action'=>'update',$hobby['Hobby']['id']),array('class'=>'btn btn-sm btn-primary'));
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                                echo '<a id="'.$hobby['Hobby']['id'].'" class="btn btn-danger btn-sm delete">Delete Hobby</a>';
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
