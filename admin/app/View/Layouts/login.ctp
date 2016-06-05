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
			echo $this->fetch('css');
			echo $this->fetch('script');
			echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
	<div id="wrapper">
		<?php echo $content_for_layout; ?>
	</div>
		<?php
			echo $this->Html->script('jquery');
			echo $this->Html->script('app');
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('metisMenu');
			echo $this->Html->script('sb-admin-2');
		?>
	</body>