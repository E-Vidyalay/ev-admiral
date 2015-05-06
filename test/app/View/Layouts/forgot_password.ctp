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