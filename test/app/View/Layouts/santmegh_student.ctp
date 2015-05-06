<html>
	<head>
		<title><?php echo $title;?></title>
		<?php
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('justified-nav');
			echo $this->Html->css('jquery-ui');
		
			echo $this->Html->script('jquery-2.0.3');

			echo $this->Html->script('jquery.countdownTimer');
			
			

			echo $this->fetch('css');
			echo $this->fetch('script');	
		?>
		<script type = "text/javascript">
		    
			function nobacks()
			{
				window.history.forward()
			}

			nobacks();

			//window.onload=noback;

			window.onpageshow=function(evt)
			{
				if(evt.persisted)noback()
			}

			window.onunload=function()
			{
				void(0)
			}
			window.onload = function () {
		    	//DisableBackButton;
		    	
		        document.onkeydown = function (e) {
		            return (e.which || e.keyCode) != 116;
		        };
		        noback;
		    }
		</script>
	</head>
	<body>
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
		  			<?php
					if($activeUser['User']['path']!=null){
						echo "<img src='".$this->webroot."files/student/path/".$activeUser['User']['path_dir']."/".$activeUser['User']['path']."' style='height:60px;width:60px;padding:5px' /><br/>";
					}
					?>
		  		<div class='btn-group ' style="margin-top: 0px">
		  			<button class='btn btn-default btn-sm dropdown-toggle' data-toggle="dropdown"><i class='glyphicon glyphicon-user'></i> <?php echo $activeUser['User']['username']?> &nbsp; <i class="caret"></i></button>
		  			<!--<button class='btn btn-default btn-lg dropdown-toggle' data-toggle="dropdown"><span class="caret" style="height: 15px;margin-top: 9px"></span> </button>-->
		  			<ul class="dropdown-menu" role="menu" style="z-index: 100;" >
					   
					     <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-off')) . "  Change Password",array('controller' => 'students', 'action' => 'change_pass'),array('escape' => false)); ?></li>
					    <li><?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-off')) . "  Logout",array('controller' => 'students', 'action' => 'logout'),array('escape' => false)); ?></li>
					    
					    
					</ul>
					
		  		</div>	
		  		
		  		</div>
		  		
		  	</div>
		  </div>
	      
	      <hr/>
	      <?php echo $content_for_layout; ?>
	     
	
	    </div> <!-- /container -->
		<?php
			
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('remove-alert');
			
		?>
	</body>
</html>