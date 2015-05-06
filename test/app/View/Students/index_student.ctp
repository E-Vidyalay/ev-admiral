<br/>
<div class='row'>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<center><h4>Test</h4></center>
			</div>
			<div class="panel-body" style="height:600px">
				<?php				
					$flag2=0;
					foreach ($tests as $test) {
						$f=0;
						foreach ($givenTest as $gt) {
							if($gt['Test']['id']==$test['Test']['id']){				
								$f++;
								
							}
						}
						if($f==0){
							echo "<li><h4>".$this->Html->link($test['Test']['name'],array('controller'=>'tests','action'=>'student_test_view',$test['Test']['id']))."</h4></li>";
								$f++;
								$flag2++;
								
						}

						

					}
					if($flag2==0){
							echo "<h3 style='color:red;'>No Test Scheduled</h3>";
						}
				?>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<center><h4>Test History</h4></center>
			</div>
			<div class="panel-body" style="height:600px">
				<?php
					foreach ($givenTest as $gt) {
						
						echo "<li><h4>".$this->Html->link($gt['Test']['name'],array('controller'=>'tests','action'=>'result_view',$student_id,$gt['Test']['id']))."</h4></li>";
					}
				?>
			</div>
		</div>
	</div>

</div>

