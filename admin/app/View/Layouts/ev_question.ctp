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
            echo $this->Html->script('pramukhime-common');
            echo $this->Html->script('tiny_mce/tiny_mce.js');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
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
                theme_advanced_resizing_use_cookie : false,
                content_css : "/SantMegh/css/ptparea.css",
                pramukhime_language: [
                    {
jsfile:'pramukhindic.js',
kbclassname:'PramukhIndic',
kbtitle:'Pramukh Indic',
languagelist:[

{language: 'gujarati', title:'Gujarati'},
{language: 'hindi', title:'Hindi'},

]
}
,
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
            body, * {font-family:verdana, arial, helvetica, sans-serif; font-size:12px;}
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
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out fa-fw')) . " Logout",array('controller' => 'users', 'action' => 'logout'),array('escape' => false));?>
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
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View standards",array('controller'=>'standards','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add standard",array('controller'=>'standards','action'=>'insert'),array('escape' => false)); ?>
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

	</body>
</html>