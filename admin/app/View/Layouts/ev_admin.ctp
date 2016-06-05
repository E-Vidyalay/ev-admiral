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
            echo $this->Html->css('app');
            echo $this->Html->css('dataTables.bootstrap.css');
            echo $this->Html->css('dataTables.responsive.css');
            echo $this->Html->css('colpick');
            echo $this->Html->css('bootstrap-dialog');
			echo $this->fetch('css');
			echo $this->fetch('script');
            echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
		?>
        <script type="text/javascript">var baseUrl = '<?php echo $this->base; ?>';
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
        <?php echo $this->Js->set('url', $this->request->base); ?>
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
                    <?php echo $this->Html->image('ev-logo2.png',array('class'=>'brand-logo')); ?>
                    <span class="navbar-brand">ઈ-વિદ્યાલય</span>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right hidden-sm hidden-xs">
                <li>
                <?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bell fa-fw')) . "",array('controller' => 'admins', 'action' => 'contribute_ebook'),array('escape' => false));?>
                </li>
                <!-- dropdown-user -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Welcome, <?php echo $activeUser['User']['firstname'].' '.$activeUser['User']['lastname'];?>   <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><h4><?php echo $activeUser['User']['firstname'].' '.$activeUser['User']['lastname'];?></h4><?php echo $activeUser['User']['username'];?></a></li> 
                        <li><?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')) . "User Profile",array('controller' => 'admins', 'action' => 'profile',$activeUser['User']['id']),array('escape' => false));?>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
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
            <ul class="nav navbar-top-links hidden-lg hidden-md" style="float:right;">
                <li>
                <?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-bell fa-fw')) . "",array('controller' => 'admins', 'action' => 'contribute'),array('escape' => false));?>
                </li>
                <!-- dropdown-user -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a><h4><?php echo $activeUser['User']['firstname'].' '.$activeUser['User']['lastname'];?></h4><?php echo $activeUser['User']['username'];?></a></li> 
                        <li><?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')) . "User Profile",array('controller' => 'admins', 'action' => 'profile',$activeUser['User']['id']),array('escape' => false));?>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
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
                            <a href="#"><i class="fa fa-signal fa-fw"></i> Manage Levels<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Levels",array('controller'=>'levels','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Level",array('controller'=>'levels','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage Subjects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View subjects",array('controller'=>'subjects','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add subject",array('controller'=>'subjects','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Topics<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View topics",array('controller'=>'topics','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add topic",array('controller'=>'topics','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage SubTopics<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View topics",array('controller'=>'SubTopics','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add topic",array('controller'=>'SubTopics','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>                        
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage Literature<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Literature Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View category",array('controller'=>'Literatures','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add category",array('controller'=>'Literatures','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                <a href="#"><i class="fa fa-book fa-fw"></i> Manage literature sub category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View sub category",array('controller'=>'SubLiteratures','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add sub category",array('controller'=>'SubLiteratures','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-file fa-fw"></i> Manage Literature Post<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Posts",array('controller'=>'LiteraturePosts','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Post",array('controller'=>'LiteraturePosts','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage ebooks<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View ebook",array('controller'=>'ebooks','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add ebook",array('controller'=>'ebooks','action'=>'insert'),array('escape' => false)); ?>
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
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage Hobby Lobby<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Hobby Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View category",array('controller'=>'Hobbies','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add category",array('controller'=>'Hobbies','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Hobby Sub Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View sub category",array('controller'=>'SubHobbies','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add sub category",array('controller'=>'SubHobbies','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-file fa-fw"></i> Manage Hobby Lobby Post<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Posts",array('controller'=>'HobbylobbyPosts','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Post",array('controller'=>'HobbylobbyPosts','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        
                         <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Manage Information Post<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Posts",array('controller'=>'InformationPosts','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Post",array('controller'=>'InformationPosts','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                        </li>
 
                        <li>
                            <a href="#"><i class="fa fa-photo fa-fw"></i> Manage Images<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Images",array('controller'=>'images','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Images",array('controller'=>'images','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " All Admin Users",array('controller'=>'admins','action'=>'users'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Admin User",array('controller'=>'admins','action'=>'add'),array('escape' => false)); ?>
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
        <div class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
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
            echo $this->Html->script('bootstrap-dialog');
            echo $this->Html->script('colpick');
            echo $this->Html->script('metisMenu');
			echo $this->Html->script('sb-admin-2');
            echo $this->Html->script('jquery.dataTables.min.js');
            echo $this->Html->script('dataTables.bootstrap.min.js');
            
		?>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
                $('#picker').colpick({
                    layout:'hex',
                    submit:0,
                    colorScheme:'dark',
                    onChange:function(hsb,hex,rgb,el,bySetColor) {
                        $(el).css('border-color','#'+hex);
                        // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
                        if(!bySetColor) $(el).val(hex);
                    }
                    }).keyup(function(){
                    $(this).colpickSetColor(this.value);
                });
            });
        </script>
	</body>
</html>