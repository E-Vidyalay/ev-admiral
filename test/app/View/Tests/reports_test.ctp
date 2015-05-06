<br/>
<h3>Test Report</h3>
<hr/>
<table class="table table-bordered table-stripped" width="100%">
	<tr>
		<th>#</th>
		<th>Student</th>		
		<th>Theory Result</th>
		<th>Practical Result</th>
		<th>Theory 60% </th>
		<th>Practical 40%</th>
		<th>Total</th>
		<th>Result</th>
		<th>Grade</th>
		<th>Certification</th>
		
	</tr>
	<?php
		$i=1;$count=0;
		foreach ($students as $student) {
			$f=0;$z=0;$theory_m=0;$prac_m=0;$theory_total=0;$prac_t=0;$f_t=0;$f_p=0;$f_r=0;$grade="";
			echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$student['Student']['first_name']."</td>";
				foreach ($results as $r) {
					if($r['Student']['id']==$student['Student']['id']){
						echo "<td>".$r['TestStudentResult']['marks_obtained']."/".$r['TestStudentResult']['total_mrks']."</td>";
						$f++;
						if($r['TestStudentResult']['marks_obtained']<0){
							$theory_m=0;
						}
						else{
							$theory_m=$r['TestStudentResult']['marks_obtained'];	
						}
						
						$theory_total=$r['TestStudentResult']['total_mrks'];
					}
				}
				if($f==0){
					echo "<td><font color='red'>Absent</font></td>";
					$theory_m=0;
					if(count($results)==0){
						$theory_total=0;
					}
					else{
						$theory_total=$results[0]['TestStudentResult']['total_mrks'];
					}
					
				}
				/*foreach ($prac_r as $r1) {
					//if($r1['Student']['id']=$student['Student']['id']){
						echo "<td>".$r1['PracticalMark']['marks']."/".$r1['PracticalTest']['total_marks']."</td>";
						$z++;
					//}
				}*/
				foreach ($prac_r as $res) {
					if($res['Student']['id']==$student['Student']['id']){
						echo "<td>".$res['PracticalMark']['marks']."/".$res['PracticalTest']['total_marks']."</td>";
						$z++;
						$prac_m=$res['PracticalMark']['marks'];
						$prac_t=$res['PracticalTest']['total_marks'];
					}
				}
				if($z==0){
					echo "<td><font color='red'>Absent</font></td>";
					
					$prac_m=0;
					if(count($prac_r)==0){
						$prac_t=0;
					}
					else{
						$prac_t=$prac_r['0']['PracticalTest']['total_marks'];
					}
				}
				echo "<td>";
					if($theory_total==0){
						$theory_total=1;
					}
					$tp=($theory_m*100)/$theory_total;
					$f_t=round((0.6*$tp),2);
					echo $f_t."%";
				echo "</td>";
				echo "<td>";
					if($prac_t==0){
						$prac_t=1;
					}
					$tp1=($prac_m*100)/$prac_t;
					$f_p=round((0.4*$tp1),2);
					echo $f_p."%";
				echo "</td>";
				echo "<td>";
					$f_r=$f_p+$f_t;
					echo $f_r."%";
				echo "</td>";
				echo "<td>";
					if($f_r>=35){
						echo "<font color='green'>PASS</font>";
					}
					else if($f_r<=39 && $f_r>0){
						echo "<font color='red'>FAIL</font>";
					}
					else if($f_r==0){
						echo "<font color='red'>ABSENT</font>";
					}
				echo "</td>";
				echo "<td>";
					if($f_r>=75){
						$grade= "A+";						
					}
					else if($f_r>=65 && $f<75){
						$grade= "A";
					}
					else if($f_r>=54 && $f_r<65){
						$grade= "B";
					}
					else if($f_r>=45 && $f<54){
						$grade= "C";
					}
					else if($f_r>=39 && $f_r<45){
						$grade= "PASS";
					}
					else if($f_r<39 && $f_r>0){
						$grade= "-";
					}
					else if($f_r==0){
						$grade= "-";
					}
					echo $grade;
				echo "</td>";
				echo "<td>";
					if($grade=="A" || $grade=="C" || $grade=="PASS" || $grade=="A+" || $grade=="B"){
						//echo $this->Html->link('Print Certificate',array('controller'=>'practical_marks','action'=>'print_certi'));
						$count++;
						echo "<button id='b".$i."' class='btn btn-sm btn-success cb' value='".$i."'>Print Certificate</button>";
					}
					else{
						echo "-";
					}
				echo "</td>";
			echo "</tr>";
			echo '<div class="print" style="display:none" id="c'.$i.'">'
			?>
			
				<div id="wrap" style="border:double;padding:15px">
				  
				  		<div style="float:left;width:50%">
				  			<?php echo $this->Html->image('sm_lg.png',array('style'=>'height:80px;')); ?>  
				  		</div>
				  		<div style="float:right;width:45%">
				  			A National Computer Literacy Programme<br/>
				  			(A work related to the Ministry of Human Resource Development & Santmegh Education)
				  			Reg.No. E-7050
				  		</div>
				  		<div style="clear:both"></div>
			      <hr/>
			      <center>
			      	<h1>Certificate</h1>
			      
			      	<img src="/santmegh-computer-education/img/user.png" alt="student" height="200px" width="200px" style="border:1px solid;padding:5px;border-radius:2px" />
			      	<br/>
			      	<p>This is to certify that Mr./Mrs./Miss <?php echo strtoupper($student['Student']['first_name']." ".$student['Student']['last_name']) ?> has give exam on <?php echo  date("d-M-Y", strtotime($student['Test']['date'])); ?></p>
			      				      	
			      	</center>
			      	<hr/>
			      	<div style="float:left;width:50%;border:1px solid;height:240px">
			      		<center><h3>Exam Details</h3></center>
			      		<hr/>
			      		<b> Exam Name :</b><?php echo $student['Test']['name']; ?><br/>
			      		<b> Total Marks:</b><?php echo $theory_total+$prac_t; ?><br/>
			      		<small> (Total marks=Total theory Marks + Practical Total marks)</small><br/>
			      		<b> Marks Obtained: </b><?php echo $theory_m+$prac_m; ?><br/>
			      		<b> Marking Scheme: </b><?php echo $Test['Markingscheme']['display_name']; ?><br/>
			      		<b> Total Percentage: </b><?php echo round($f_r,2); ?><br/>
			      		<small>(60% Theory Subject + 40% of Practical Subject)</small><br/>
			      		<b> Subject:</b><?php echo $Test['Subject']['name']; ?> 
			      	</div>
			      	<div style="float:right;width:49%;border:1px solid;height:240px">
			      		<center>
			      			<h3>Grade</h3>
			      			<h2><?php echo $grade; ?></h2>
			      			<br/>
			      			
			      			<hr/>
			      			<b>Grade System:</b> % &gt;=75=A+, % &gt;=65 &amp; &lt;75=A, %&gt=54 &amp; &lt;65=B, %&gt=45 &amp; &lt;54=C, %&gt39 &amp; &lt;45=PASS
			      		</center>
			      	</div>
			      	<div style="clear:both"></div>
			      	<br/>
			      	<hr/>
			      	<div style="width=60%;float:right;">
			      		<small>For, Santmegh Computer Education</small>
			      		<br/><br/>
			      		<div style="width:80%;float:right"><hr/></div>
			      		<div style="float:right"><small>(Director)</small></div>
			      	</div>
			      	<div style="clear:both"></div>
			      	<hr/>
			      	<small>
			      		Address:F/2-3, Gitanjali Complex, Opp. SBI, Nava Bazar, Karjan. Phone: +91-2666-231727.
			      		Email:santmegh_education@yahoo.co.in. Website: www.santmegheducation.com
			      	</small>
			      </div>
			</div>
			<?php
			$i++;
		}
	?>
</table>

<script>
	var c="<?php echo $count; ?>";
	console.log(c);
	$(".cb").click(function(){
		v=$(this).val();
		$("#c"+v).print();
	})

</script>