<br/>
<div class='row'>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<center><h4>Today's Tests</h4></center>
			</div>
			<div class="panel-body" style="height:400px">
				<?php
					foreach ($today_test as $tt) {
						echo "<li>".$tt['Test']['name']."</li>";
					}
				?>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<center><h4>Students Appearing for Tests</h4></center>
			</div>
			<div class="panel-body" style="height:400px">
				<?php
					foreach ($students as $st) {
						echo "<li>".$st['Student']['first_name']." ".$st['Student']['last_name']." for ".$st['Test']['name']."</li>" ;
					}
				?>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<center><h4>System Guide</h4></center>
			</div>
			<div class="panel-body" style="height:400px">
				<h5 style='color:red'>* Some important tips for using this system.<br/></h5>
				<ul>
					<li>Manage Subjects</li>
					<li>Manage Students</li>
					<li>Manage Question Bank</li>
					<li>Manage Marking Schemes</li>
					<li>Manage Tests</li>
				</ul>
			</div>
		</div>
	</div>
</div>
