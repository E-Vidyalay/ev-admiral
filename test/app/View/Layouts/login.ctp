<html>
	<head>
		<title><?php echo $title;?></title>
		<?php
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('justified-nav');
			echo $this->fetch('css');
			echo $this->fetch('script');	
		?>
	</head>
	</head>
	<body style="background-color: #E5E5E5;">
		
			<center>
				<div style="width:28%">
					<?php echo $content_for_layout ?>
					<?php
						echo $this->Session->flash('error');
					    echo $this->Session->flash('success');
					    echo $this->Session->flash('notice');
					?>
					</div>
				</center>
			
		
		<?php
			echo $this->Html->script('jquery-1.11.0');
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('remove-alert');
			
		?>
	</body>
</html>