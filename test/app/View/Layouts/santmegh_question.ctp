<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        
        
        <?php 
        	echo $this->Html->css('bootstrap');
			echo $this->Html->css('justified-nav');
			echo $this->fetch('css');
        	echo $this->Html->script('pramukhime-common');
			echo $this->Html->script('tiny_mce/tiny_mce.js');
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
<body role="application" onload="bodyload();">
    <!-- <div class="page">
       
        <div>
            <br />
            <div class="divleft">
                <ul id="pi_tips">
                    <li class='smalltip'>Press F9 to switch between selected language and English.</li>
<li class='smalltip'>Copy and paste the typed text into Microsoft Word to save it.</li>
<li class='smalltip'>Download PramukhIME for Windows to directly type in MS Office in Windows XP/Vista/7/8.</li>

                </ul>
            </div>
            <div class="headerright">
            &nbsp;
            </div>
        </div>
        <div class="clear"><br /></div>
		<div>
			<!-- <textarea id="typingarea" name="typingarea" rows="15" cols="80">
			</textarea>
            <br /> 
            <?php echo $content_for_layout; ?>
		</div> -->
			 <div class="container">
		  <div class="row">
		  	<div class="col-lg-4">
		  		<?php echo $this->Html->image('sm_b_logo.png'); ?>  
		  	</div>
		  	<div class="col-lg-5">
		  		<?php
					echo $this->Session->flash('error');
				    echo $this->Session->flash('success');
				    echo $this->Session->flash('notice');
				 ?>
		  	</div>
		  	<div class="col-lg-3">
		  		<div class="pull-right">
		  		<div class='btn-group' style="margin-top: 12px">
		  			<button class='btn btn-default btn-lg disabled'><i class='glyphicon glyphicon-user'></i> <?php echo $activeUser['User']['username']?></button>
		  			<button class='btn btn-default btn-lg dropdown-toggle' data-toggle="dropdown"><span class="caret" style="height: 15px;margin-top: 4px"></span> </button>
		  			<ul class="dropdown-menu" role="menu">
					    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-off')) . "  Change Password",array('controller' => 'users', 'action' => 'change_pass'),array('escape' => false)); ?></li>
					    
					    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-off')) . "  Logout",array('controller' => 'users', 'action' => 'logout'),array('escape' => false)); ?></li>
					    
					    
					</ul>
		  		</div>	
		  		
		  		</div>
		  		
		  	</div>
		  </div>
	      
	      <div class="masthead">
		 
	      
	       <ul class="nav nav-justified">
	          <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-home')) . " Home",array('controller' => 'users', 'action' => 'index'),array('escape' => false)); ?></li>
	          <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-ok')) . " Marks Scheme",array('controller' => 'markingschemes', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list')) . "  Subjects",array('controller' => 'subjects', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-user')) . "  Students",array('controller' => 'students', 'action' => 'index'),array('escape' => false)); ?></li>			      
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-book')) . " Question Bank",array('controller' => 'question_banks', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . " Manage Tests",array('controller' => 'tests', 'action' => 'index'),array('escape' => false)); ?></li>
			 <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list')) . " Reports",array('controller' => 'tests', 'action' => 'reports'),array('escape' => false)); ?></li>
	       </ul>
	      
	      </div>
		  
	      <?php echo $content_for_layout; ?>
	     
	
	    </div> <!-- /container -->
		<?php
			echo $this->Html->script('jquery-1.11.0');
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('remove-alert');
			
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
