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
            echo $this->Html->script('pramukhime-common');
            echo $this->Html->script('tiny_mce/tiny_mce.js');
			echo $this->fetch('css');
			echo $this->fetch('script');
            echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script type="text/javascript">
            //piresourcebase = 'tiny_mce/plugins/pramukhime/';
            tinyMCE.init({
                // General options
                mode : "textareas",
                theme: "advanced",
                plugins : "table,advhr,advimage,advlink,inlinepopups,searchreplace,print,paste,directionality,fullscreen,pramukhime",
                auto_focus: 'typingarea',
                // Theme options
                theme_advanced_buttons1: "pramukhime,pramukhimeclick,pramukhimeconvert,pramukhimehelp,print,undo,redo,fontselect,fontsizeselect,bold,italic,underline,forecolor,backcolor,|,link,unlink,image,|,justifyleft,justifycenter,justifyright,bullist,numlist,outdent,indent,|,code,ltr,rtl",
                theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,tablecontrols,|,sub,sup,blockquote,advhr,anchor,cleanup,removeformat,|,fullscreen",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing: true,
                convert_urls : false,
                theme_advanced_resizing_use_cookie : false,
                content_css : "/ev-admiral/admin/css/ptparea.css",
                pramukhime_language: [
                    {
                        jsfile:'pramukhindic.js',
                        kbclassname:'PramukhIndic',
                        kbtitle:'Pramukh Indic',
                        languagelist:[

                        {language: 'gujarati', title:'Gujarati'},
                        {language: 'hindi', title:'Hindi'},

                        ]
                        },
                    { 
                        kbtitle:'', 
                        title:'English' 
                    }
                ]
            });
            function bodyload() {
                var lang = (getCookie('pramukhime_language', ':english')).split(':');
                if(typeof pramukhIME != 'undefined') {
                    pramukhIME.setLanguage(lang[1], lang[0]);
                    pramukhIME.onLanguageChange(function(l,k,c){setCookie('pramukhime_language',k+':'+l,10);},'cookie');
                }
            }
        </script>
        
        <style type="text/css">
            body, * {font-family:helvetica, sans-serif; font-size:12px;}
            img {border:0px;}
            .page { width:100%; margin:0 auto;}
            #fblogo a,#gplogo a, #twtlogo a {height:20px; width:20px; padding-left:15px; text-decoration:none;}
            #fblogo {height:20px; width:20px; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -402px no-repeat;}
            #gplogo {height:20px; width:20px; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -422px no-repeat;}
            #twtlogo {height:20px; width:20px; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -442px no-repeat;}
            .header {height:50px; border-bottom:2px solid #FF6600; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -1342px no-repeat; padding-left:55px; }
            .divleft { float:left;}
            .headerright { text-align:right;}
            .title { font-size:20px; color:#FF6600; font-weight:bold; }
            .clear {clear:both;}
            .editor {width:100%; border:1px solid #bbb; border-collapse:collapse; }
            .editortoolbar {background:#EEEEEE; height:26px; width:100%;border:1px solid #bbb; padding:0px;}
            textarea { height:376px; padding:0px; border:0px; width:100%; overflow:auto;}
            .bottom {border-top:2px solid #FF6600; padding-top:4px;}
            .copyright {text-align:center;}
            .big {font-size:14px;}
            .bigger {font-size:16px;}
            #pi_tips {list-style-type:none; margin:0px; padding:0px;display:none}
            ul li.tipsmall {background-position: 0 0px; padding-left:20px; margin:0px; font-size:xx-small;}
            ul li.tip {height:20px; margin:0px; padding-left:20px;background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -260px no-repeat;}
        </style>
        <script type="text/javascript">var baseUrl = '<?php echo $this->base; ?>';</script>
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
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Level",array('controller'=>'levels','action'=>'insert'),array('escape' => false)); ?>
                                </li>
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
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Subject",array('controller'=>'subjects','action'=>'insert'),array('escape' => false)); ?>
                                </li>
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
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Sub Topic",array('controller'=>'SubTopics','action'=>'insert'),array('escape' => false)); ?>
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
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add category",array('controller'=>'Literatures','action'=>'insert'),array('escape' => false)); ?>
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
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Manage Sub Hobby  Category<span class="fa arrow"></span></a>
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
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Admin User",array('controller'=>'admins','action'=>'add'),array('escape' => false)); ?>
                                </li>
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
			echo $this->Html->script('metisMenu');
            echo $this->Html->script('colpick');
			echo $this->Html->script('sb-admin-2');
            echo $this->Html->script('zclip');
            echo $this->Html->script('ZeroClipboard.js');
            echo $this->Html->script('jquery.dataTables.min.js');
            echo $this->Html->script('dataTables.bootstrap.min.js');
		?>
        <script language="javascript" type="text/javascript">
            var ul = document.getElementById('pi_tips');

            var elem, len = ul.childNodes.length, i;
            for (i = 0; i < len; i++) {
                elem = ul.childNodes[i];
                if (elem.tagName && elem.tagName.toLowerCase() == 'li' && elem.innerHTML != "") {
                    tips.push(elem.innerHTML);
                }
            }
            for (i = len - 1; i > 1; i--) {
                ul.removeChild(ul.childNodes[i]);
            }
            ul.childNodes[i].className = 'tip'; // replace small tip text with large

            showNextTip(); // call for first time
            setTimeout('turnOffTip()', 90000); // show tips for 1.5 minutes
        </script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
           var client = new ZeroClipboard( $(".copy-button"), {
              moviePath: "http://olymp/ZeroClipboard.swf",
              debug: false
            } );
            client.on( "ready", function( readyEvent ) {
              // alert( "ZeroClipboard SWF is ready!" );

              client.on( "aftercopy", function( event ) {
                // `this` === `client`
                // `event.target` === the element that was clicked
                alert("Copied text to clipboard: " + event.data["text/plain"] );
              } );
            } );
        </script>
	</body>
</html>