<br/>
<?php
echo $this->Html->link('Back',array('controller'=>'HobbylobbyPosts','action'=>'index'),array('class'=>'visible-xs btn btn-default btn-sm'));
?>
<br/>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> <?php echo $posts['HobbylobbyPost']['title']; ?></h5>
			</div>
			<div class="panel-body">
			<?php echo $posts['HobbylobbyPost']['meta_description'];?>
			</div>
			<div class="panel-heading">
			<h5> <?php echo "By-".$posts['Admin']['firstname']." ".$posts['Admin']['lastname'].", at-".$posts['HobbylobbyPost']['updated_at']; ?></h5>
			</div>
		</div>
	</div>
</div>