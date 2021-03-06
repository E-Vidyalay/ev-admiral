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
            echo $this->Html->css('dataTables.bootstrap.min.css');
            echo $this->Html->css('responsive.bootstrap.min.css');
            echo $this->Html->css('select.bootstrap.min.css');
            echo $this->Html->css('buttons.bootstrap.min.css');
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
                    <?php echo $this->Html->link($this->Html->image('ev-logo2.png',array('class'=>'brand-logo')).''._('<span class="navbar-brand">ઈ-વિદ્યાલય</span>'),array('controller'=>'admins','action'=>'index'),array('escape' => false));
                    ?>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right hidden-sm hidden-xs">
                <li>
                <?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw fa-1x')) . "",array('controller' => 'admins', 'action' => 'index'),array('escape' => false));?>
                </li>
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
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')) . "User Profile",array('controller' => 'admins', 'action' => 'profile'),array('escape' => false));?>
                        </li>
                        <li class="divider"></li>
                        <li><?php
                                echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out fa-fw')) . " Logout",array('controller' => 'admins', 'action' => 'logout'),array('escape' => false));?>
                        </li>
                    </ul>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                </li>
                
                    
                    <!-- /.dropdown-user -->
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
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')) . "User Profile",array('controller' => 'admins', 'action' => 'profile'),array('escape' => false));?>
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
                                <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>                          
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Level",array('controller'=>'levels','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                                <?php }?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-signal fa-fw"></i> Manage Standards<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Standards",array('controller'=>'standards','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>                          
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Standard",array('controller'=>'standards','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                                <?php }?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage Subjects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Subjects",array('controller'=>'subjects','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Subject",array('controller'=>'subjects','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Topics<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Topics",array('controller'=>'topics','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Topic",array('controller'=>'topics','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Sub Topics<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Sub Topics",array('controller'=>'SubTopics','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Topic",array('controller'=>'SubTopics','action'=>'insert'),array('escape' => false)); ?>
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
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Lit categories",array('controller'=>'Literatures','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Lit category",array('controller'=>'Literatures','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                <a href="#"><i class="fa fa-book fa-fw"></i> Manage Sub-Lit Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Sub Lit categories",array('controller'=>'SubLiteratures','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Sub Lit category",array('controller'=>'SubLiteratures','action'=>'insert'),array('escape' => false)); ?>
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
                            <a href="#"><i class="fa fa-external-link fa-fw"></i> Manage Video Links<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Links",array('controller'=>'Links','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Links",array('controller'=>'Links','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Multiple Links",array('controller'=>'Links','action'=>'multiple_insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Manage Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Pages",array('controller'=>'articles','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Page",array('controller'=>'articles','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage E-books<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View E-books",array('controller'=>'ebooks','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add E-book",array('controller'=>'ebooks','action'=>'insert'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Manage Quizes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
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
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Marking Scheme<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Marking Schemes",array('controller'=>'Markingschemes','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Marking Scheme",array('controller'=>'Markingschemes','action'=>'add_marks'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Manage Newsletters<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Newsletters",array('controller'=>'NewsLetters','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Post Newsletter",array('controller'=>'NewsLetters','action'=>'add'),array('escape' => false)); ?>
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
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Hobby categories",array('controller'=>'Hobbies','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Hobby category",array('controller'=>'Hobbies','action'=>'insert'),array('escape' => false)); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Hobby Sub Category<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level collapse">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Sub Hobby categories",array('controller'=>'SubHobbies','action'=>'index'),array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Sub Hobby category",array('controller'=>'SubHobbies','action'=>'insert'),array('escape' => false)); ?>
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
                            <a href="#"><i class="fa fa-users fa-fw"></i> Admin Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " All Admin Users",array('controller'=>'admins','action'=>'users'),array('escape' => false)); ?>
                                </li>
                                <?php if($activeUser['User']['AdminType']['name']=='Administrator'){?>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Admin User",array('controller'=>'admins','action'=>'add'),array('escape' => false)); ?>
                                </li>
                                <?php }?>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sun-o fa-fw"></i> Manage Thoughts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Thoughts",array('controller'=>'thoughts','action'=>'index'),array('escape' => false)); ?>
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
            echo $this->Html->script('dataTables.responsive.min.js');
            echo $this->Html->script('responsive.bootstrap.min.js');
            echo $this->Html->script('dataTables.select.min.js');
            echo $this->Html->script('dataTables.buttons.min.js');
            echo $this->Html->script('buttons.bootstrap.min.js');
            
		?>
        <script>
            $(document).ready(function() {
               var table= $('#dataTables-example').DataTable({
                        "columnDefs": [{ 
                                "visible": false, "targets": 0, "searchable": false 
                            }],
                        dom: 'BflrtipB',
                        responsive: true,
                        select: 'multi',
                        buttons: [
                            'selectAll',
                            'selectNone'
                        ],
                        language: {
                            buttons: {
                                selectAll: "Select All",
                                selectNone: "Deselect All"
                            }
                        }
                });
               $('#getdbutton').attr("disabled",true);
               table.on( 'select', function ( e, dt, type, indexes ) {
                    if( table.rows('.selected').data().length > 0 ){
                        $('#getdbutton').attr("disabled",false);
                    }
                });
               table.on( 'deselect', function ( e, dt, type, indexes ) {
                    if( table.rows('.selected').data().length === 0 ){
                        $('#getdbutton').attr("disabled",true);
                    }
                });
               
               $('#getdbutton').click( function () {
                    // alert( table.rows('.selected').data().length +' row(s) selected' );
                    var data=table.rows('.selected').data();
                    console.log(data);
                    var dataArray=[];
                    for(i=0;i<data.length;i++){
                        dataArray.push(data[i][0]);
                    }
                    console.log(JSON.stringify(dataArray));
                    var u=location+"/delete_all/"+JSON.stringify(dataArray);
                    BootstrapDialog.show({
                        type: BootstrapDialog.TYPE_DANGER,
                        title: '<i class="fa fa-warning fa-2x"></i> Warning',
                        cssClass: 'btn-primary',
                        message:'Are you sure you want to delete All Entry?',
                        buttons: [{
                                label: 'Yes',
                                cssClass: 'btn-success',
                                action: function(dialog) {
                                    // console.log(u);
                                    $.ajax({
                                        url:u,
                                        success:function(data){
                                            window.location.replace(location);
                                            alert('Selected Data Deleted successfully !!')
                                        },
                                        error:function(e){
                                            BootstrapDialog.show({
                                                type: BootstrapDialog.TYPE_WARNING,
                                                title: '<i class="fa fa-warning fa-2x"></i> Warning',
                                                cssClass: 'btn-primary',
                                                message:'!! Sorry Delete for all selection is not allow in this part. !!',
                                                buttons: [{
                                                    label: 'OK',
                                                    cssClass: 'btn-default',
                                                    action: function(d) {
                                                        d.close();
                                                        dialog.close();
                                                    }
                                                }]
                                            });
                                        }
                                    })
                                }
                            }, {
                                label: 'No',
                                action: function(dialog) {
                                    dialog.close();
                                }
                            }]
                    });
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