<html>
	<head>
		<title>Santmegh Computer Education</title>
		<?php
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('justified-nav');
			echo $this->Html->css('jquery-ui');
			echo $this->Html->script('jquery-1.10.2');
			echo $this->Html->script('jQuery.print');
			echo $this -> Html -> script('jquery-ui');
			echo $this->fetch('css');
			echo $this->fetch('script');	
		?>
		<script>
		  $(function() {
		    $( "#datepicker" ).datepicker({
		      changeMonth: true,
		      changeYear: true,
		      yearRange: "-100:+0",
		      dateFormat: 'yy-mm-dd'
		     
		    });
		  });
		  </script>
	</head>
	<body style="background:#EEEEEE">
		 <div class="container" >
		  <div class="row">
		  	<div class="col-lg-4 col-md-6">
		  		<?php echo $this->Html->image('sm_b_logo.png'); ?>  
		  	</div>
		  	<div class="col-lg-5">
		  		<?php
					echo $this->Session->flash('error');
				    echo $this->Session->flash('success');
				    echo $this->Session->flash('notice');
				 ?>
		  	</div>
		  	<div class="col-lg-3 col-md-6">
		  		<div class="pull-right">
		  		<div class='btn-group' style="margin-top: 12px">
		  			<button class='btn btn-default btn-lg dropdown-toggle' data-toggle="dropdown"><i class='glyphicon glyphicon-user'></i> <?php echo $activeUser['User']['username']?> &nbsp; <i class="caret"></i></button>
		  			<!--<button class='btn btn-default btn-lg dropdown-toggle' data-toggle="dropdown"><span class="caret" style="height: 15px;margin-top: 9px"></span> </button>-->
		  			<ul class="dropdown-menu" role="menu" style="z-index: 100;" >
					    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-off')) . "  Change Password",array('controller' => 'users', 'action' => 'change_pass'),array('escape' => false)); ?></li>
					    
					    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-off')) . "  Logout",array('controller' => 'users', 'action' => 'logout'),array('escape' => false)); ?></li>
					    
					    
					</ul>
		  		</div>	
		  		
		  		</div>
		  		
		  	</div>
		  </div>
	      
	      <div class="masthead">
		 
	       <nav class="navbar navbar-default" role="navigation" style="z-index: 99;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div> 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="" id="my_nav" >
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-home')) . " Home",array('controller' => 'users', 'action' => 'index'),array('escape' => false)); ?></li>
	         <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i>Manage Masters <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		             <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-ok')) . " Manage Marking Scheme",array('controller' => 'markingschemes', 'action' => 'index'),array('escape' => false)); ?></li>
					  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list')) . "  Manage Subjects",array('controller' => 'subjects', 'action' => 'index'),array('escape' => false)); ?></li>
					  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-user')) . "  Manage Students",array('controller' => 'students', 'action' => 'index'),array('escape' => false)); ?></li>
		          </ul>
		      </li>		      
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-book')) . " Manage Question Bank",array('controller' => 'question_banks', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . " Manage Test",array('controller' => 'tests', 'action' => 'index'),array('escape' => false)); ?></li>
			   <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . " Practical Test marks",array('controller' => 'practical_marks', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-folder-close')) . "  Test Reports",array('controller' => 'tests', 'action' => 'reports'),array('escape' => false)); ?></li>
        
      </ul>
      
      
        </li>
      </ul> 
    </div><!-- /.navbar-collapse -->
 </div> <!--.container-fluid -->
</nav>  
	       <!-- <ul class="nav nav-justified">
	          <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-home')) . " Home",array('controller' => 'users', 'action' => 'index'),array('escape' => false)); ?></li>
	          <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-ok')) . " Marks",array('controller' => 'markingschemes', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list')) . "  Subjects",array('controller' => 'subjects', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-user')) . "  Students",array('controller' => 'students', 'action' => 'index'),array('escape' => false)); ?></li>			      
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-book')) . " Questions",array('controller' => 'question_banks', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . " Tests",array('controller' => 'tests', 'action' => 'index'),array('escape' => false)); ?></li>
			   <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list')) . " Reports",array('controller' => 'tests', 'action' => 'reports'),array('escape' => false)); ?></li>
			   <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . " Practical",array('controller' => 'practical_marks', 'action' => 'index'),array('escape' => false)); ?></li>
			 
	       </ul>
	       -->
	      </div>
		  
	      <?php echo $content_for_layout; ?>
	     
	
	    </div> <!-- /container -->
		<?php
			
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('remove-alert');
			
		?>
	</body>
</html>