<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Dashboard</h2>
	</div>
</div>
<hr/>
<div class="row">
<div class="col-lg-12">
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="jumbotron">
        <div class="panel-body">
            <h2>Welcome to Evidyalay Admin portal
                <br><small>Control all the content of Evidyalay website from here.</small></h2>
            <hr/>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-2">
                                    <div class="huge">સુવિચાર </div>
                                    <div>(Thought of the Day)</div>
                                </div>
                                <div class="col-xs-2">
                                    <i class="fa fa-comment fa-fw fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php 
                            if($today_thought!=null){
                                echo '<blockquote>';
                                echo '<p>'.$today_thought['Thought']['thought'].'</p>';
                                echo '<small>'.$today_thought['Thought']['thinker'].'</small>';
                                echo '</blockquote>';
                            }
                            else{
                            echo $this->Form->create('Admin',array('controller'=>'Admins','url'=>'add_thought')); ?>
                            <?php echo $this->Form->input('thought',array(
                                    'type'=>'textarea',
                                    'class'=>'form-control',
                                    'id'=>'typingarea',
                                    'rows'=>'10',
                                    'label'=>false,
                                    'style'=>'width:100%',
                                ));
                            ?>
                            <br>
                            <?php echo $this->Form->input('thinker',array(
                                    'type'=>'text',
                                    'class'=>'form-control',
                                    'label'=>'Thought By (Name of the thinker)',
                                    'style'=>'width:100%',
                                ));
                            ?>
                        </div>
                        <div class="panel-footer">
                        <?php
                            echo $this->Form->input("Add Today's Thought",array(
                                    'type'=>'submit',
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'btn btn-success'
                                ));
                            echo $this->Form->end();
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                    <!-- <div class="panel panel-default"> -->
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil-square-o fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalposts;?></div>
                                    <div>Total Number of Posts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- <div class="panel panel-default"> -->
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-fw fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $totalcomments;?></div>
                                        <div>Total Number of Comments</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-sm-4">
                    <!-- <div class="panel panel-default"> -->
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-desktop fa-fw fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><a href="http://evidyalay.net" target="_blank" style="color:#337AB7;">Preview</a> </div>
                                        <div>Click to View your Site</div>
                                    </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-eye fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalViews;?></div>
                                    <div>Total Number of Viewers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalUsers;?></div>
                                    <div>Total Number of Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-smile-o fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalcontributionAppr;?></div>
                                    <div>Contributed Content Approved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-meh-o fa-fw fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalcontributionDen;?></div>
                                    <div>Contributed Content Not Approved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>
</div>
