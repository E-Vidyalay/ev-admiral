<!DOCTYPE html>
<html>
	<head>
		<title>E-Vidyalay</title>
		<?php
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('bootstrap-theme');
			echo $this->Html->css('metisMenu.css');
			echo $this->Html->css('sb-admin-2');
			echo $this->Html->css('font-awesome');
			echo $this->Html->css('timeline');
            echo $this->Html->css('dataTables.bootstrap.css');
            echo $this->Html->css('dataTables.responsive.css');
            echo $this->Html->css('app');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php //echo $this->Html->image('logo.png',array('style'=>'height:50px')); ?>
                <a class="navbar-brand" href="">ઈ-વિદ્યાલય</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- dropdown-user -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out fa-fw')) . " Logout",array('controller' => 'admins', 'action' => 'logout'),array('escape' => false));?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manage Marking Schemes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Marking Schemes",array('controller'=>'markingschemes','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Marking Scheme",array('controller'=>'markingschemes','action'=>'add_marks'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Manage Standards<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Standards",array('controller'=>'standards','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Standard",array('controller'=>'standards','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw active"></i> Manage Subjects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Subjects",array('controller'=>'subjects','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Subject",array('controller'=>'subjects','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                                <li>
                                <a href="#"><i class="fa fa-list-ol fa-fw"></i> Manage Topics<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Topics",array('controller'=>'SubjectTopics','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Topic",array('controller'=>'SubjectTopics','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-external-link fa-fw"></i> Manage external links<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View links",array('controller'=>'Links','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add links",array('controller'=>'Links','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Manage Question Bank<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Questions",array('controller'=>'QuestionBanks','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Questions",array('controller'=>'QuestionBanks','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Manage Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View pages",array('controller'=>'articles','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Page",array('controller'=>'articles','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Manage News letters<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View news",array('controller'=>'NewsLetters','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Post news",array('controller'=>'NewsLetters','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div class="ev-alert">
             <?php
                echo $this->Session->flash('success');
                echo $this->Session->flash('error');
             ?>
        </div>
        <div id="page-wrapper" style="min-height: 327px;">

            <?php
                echo $content_for_layout;
            ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
		<?php
			echo $this->Html->script('jquery');
            echo $this->Html->script('app');
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('metisMenu');
			echo $this->Html->script('sb-admin-2');
<<<<<<< HEAD
            echo $this->Html->script('bootstrap-filestyle');

=======
            echo $this->Html->script('jquery.dataTables.min.js');
            echo $this->Html->script('dataTables.bootstrap.min.js');
>>>>>>> 2296378b767aa1f55eff290c3322e6c29638eef2
		?>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
	</body>
</html>