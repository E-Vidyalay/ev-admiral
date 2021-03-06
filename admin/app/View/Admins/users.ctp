<br/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>All Admin Users</h4>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper" id="no-more-tables">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Site Role</th>
                            <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
                            <th>Action</th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // pr($activeUser);
                            foreach ($users as $a) {
                                echo "<tr>";
                                echo "<td data-title='id'>".$a['Admin']['id']."</td>";
                                echo "<td data-title='Username'>".$a['Admin']['username']."</td>";
                                echo "<td data-title='Name'>".$a['Admin']['firstname']." ".$a['Admin']['lastname']."</td>";
                                echo "<td data-title='Email'><a href='mailto:".$a['Admin']['email']."'>".$a['Admin']['email']."</a></td>";
                                echo "<td data-title='Site Role'>".$a['AdminType']['name']."</td>";
                                if($activeUser['User']['AdminType']['name']=='Administrator'){
                                echo "<td data-title='Action'>";
                                    if($activeUser['User']['AdminType']['name']=='Administrator'){
                                        if($activeUser['User']['id']!=$a['Admin']['id']){
                                            echo $this->Html->link('Edit',array('controller'=>'admins','action'=>'update',$a['Admin']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'));
                                            echo $this->Html->link('Edit',array('controller'=>'admins','action'=>'update',$a['Admin']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                        }
                                        else{
                                            echo $this->Html->link('Edit',array('controller'=>'admins','action'=>'profile',$a['Admin']['id']),array('class'=>'btn btn-primary btn-sm visible-xs'));
                                            echo $this->Html->link('Edit',array('controller'=>'admins','action'=>'profile',$a['Admin']['id']),array('class'=>'btn btn-primary btn-sm hidden-xs'))."&nbsp;&nbsp;&nbsp;&nbsp;";
                                        }
                                    }
                                    if($activeUser['User']['id']!=$a['Admin']['id'] && $activeUser['User']['AdminType']['name']=='Administrator'){
                                        echo '<a id="'.$a['Admin']['id'].'" class="btn btn-danger btn-sm admindelete visible-xs">Delete</a>';
                                        echo '<a id="'.$a['Admin']['id'].'" class="btn btn-danger btn-sm admindelete hidden-xs">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;';    
                                    }
                                echo "</td>";
                                }
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