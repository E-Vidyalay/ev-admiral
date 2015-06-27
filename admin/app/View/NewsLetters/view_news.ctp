<br/>
<?php
echo $this->Html->link('Back',array('controller'=>'NewsLetters','action'=>'index'),array('class'=>'visible-xs btn btn-default btn-sm'));
?>
<br/>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
			<h5> <?php echo $news['NewsLetter']['title']; ?></h5>
			</div>
			<div class="panel-body">
			<?php echo $news['NewsLetter']['content'];?>
			</div>
			<div class="panel-heading">
			<h5> <?php echo "By-".$news['Admin']['username'].", at-".$news['NewsLetter']['date']; ?></h5>
			</div>
		</div>
	</div>
</div>