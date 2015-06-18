<br/>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> <?php echo $posts['LiteraturePost']['title']; ?></h5>
			</div>
			<div class="panel-body">
			<?php echo $posts['LiteraturePost']['meta_description'];?>
			</div>
			<div class="panel-heading">
			<h5> <?php echo "By-".$posts['Admin']['name'].", at-".$posts['LiteraturePost']['updated_at']; ?></h5>
			</div>
		</div>
	</div>
</div>