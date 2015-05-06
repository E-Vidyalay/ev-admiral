<html>
	<head>
		<title>Santmegh Computer Education</title>
		<?php
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('justified-nav');
			echo $this->Html->css('jquery-ui');
			echo $this->Html->script('jquery-1.10.2');
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
	<body >
		 <div class="container">
		 	<div id="wrap" style="border:double;padding:15px">
		  <div class="row">
		  	<div class="col-lg-4 col-md-6">
		  		<?php echo $this->Html->image('sm_lg.png',array()); ?>  
		  	</div>
		  	<div class="col-lg-5">

		  	</div>
		  	<div class="col-lg-3" style="padding-top:5px">
		  		A National Computer Literacy Programme
		  		(A work related to the Ministry of Human Resource Development & Santmegh Education)
		  		Reg.No. E-7050
		  	</div>
		  	
		  </div>
	      <hr/>
	      <center>
	      	<h1>Certificate</h1>
	      	<br/>
	      	<img src="/santmegh-computer-education/img/user.png" alt="student" height="200px" width="200px" style="border:1px solid;padding:5px;border-radius:2px" />
	      	<br/><br/>
	      	<p>This is to certify that Mr./Mrs./Miss #USERNAME has give exam on #DATE</p>
	      	<br/>

		 
	      <!-- <nav class="navbar navbar-default" role="navigation" style="z-index: 99;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="" id="my_nav">
        <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-home')) . " Home",array('controller' => 'users', 'action' => 'index'),array('escape' => false)); ?></li>
	         <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i>Manage Masters <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		             <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-ok')) . " Manage Marking Scheme",array('controller' => 'markingschemes', 'action' => 'index'),array('escape' => false)); ?></li>
					  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list')) . "  Manage Subjects",array('controller' => 'subjects', 'action' => 'index'),array('escape' => false)); ?></li>
					  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-user')) . "  Manage Students",array('controller' => 'students', 'action' => 'index'),array('escape' => false)); ?></li>
		          </ul>
		      </li>		      
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-book')) . " Question Bank",array('controller' => 'question_banks', 'action' => 'index'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-list-alt')) . " Create Test",array('controller' => 'tests', 'action' => 'create_test'),array('escape' => false)); ?></li>
			  <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-folder-close')) . "  Test Reports",array('controller' => 'tests', 'action' => 'reports'),array('escape' => false)); ?></li>
        
      </ul>
      
      
        </li>
      </ul> -->
    <!-- </div><!-- /.navbar-collapse -->
 <!-- </div> /.container-fluid -->
<!--</nav>  -->
	      
		  
	      <?php echo $content_for_layout; ?>
	     </div>
	
	    </div> <!-- /container -->
		<?php
			
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('remove-alert');
			
		?>
	</body>
</html>