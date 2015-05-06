<br/>
<h2>Update Student</h2>
<hr>
<div class="row">
	<div class='col-lg-6'>
		
		<?php
			echo $this->Form->create('Student',array('type'=>'file','controller'=>'student','update_student'));
			echo $this->Form->input('updated_by',array('type'=>'hidden','value'=>$user_id));
			echo $this->Form->input('id',array('type'=>'hidden'));
			echo $this->Form->input('password',array('type'=>'hidden','value'=>'santmegh'));
			echo $this->Form->input('first_name',array(
				'type'=>'text',
				'class'=>'form-control',
				'label'=>false,
				'placeholder'=>'Enter the first name of student',
				'required'
			));
			echo "<br/>";
			
			echo $this->Form->input('last_name',array(
				'type'=>'text',
				'class'=>'form-control',
				'label'=>false,
				'placeholder'=>'Enter the last name of student',
				'required'
			));
			echo "<br/>";
			echo $this->Form->input('birthdate',array(
				'type'=>'text',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>'Select date of birth',
				'div'=>false,
				'id'=>'datepicker',
				'required'
			));
			echo "<br/>";
			echo $this->Form->input('address',array(
				'type'=>'textarea',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>"Enter student's address",
				'style'=>'height:100px;font-size:12px',
				'required'
			));	
			echo "<br/>";
			echo $this->Form->input('email',array(
				'type'=>'email',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>"Enter student's email address",
				'required',
				
			));
			
			
			echo "<br/>";
			echo $this->Form->input('parent_email',array(
				'type'=>'email',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>"Enter parent's email address",
				'required'
			));	
			echo "<br/>";
			
		?>
	</div>
	<div class="col-lg-6">
		
			<?php
			echo $this->Form->input('mobile',array(
				'type'=>'number',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>"Enter student's mobile number",
				'required'
			));	
			echo "<br/>";
			echo $this->Form->input('parent_mobile',array(
				'type'=>'number',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>"Enter parent's mobile number",
				'required'
			));	
			echo "<br/>";
			echo $this->Form->input('school',array(
				'type'=>'text',
				'class'=>'form-control bottom_margin_for_text_field',
				'label'=>false,
				'placeholder'=>"Enter Student's school / university name",
				'required'
			));	
			?>
			<br/>
			<label>Select Subjects</label>
			<?php
				$i=0;
				foreach($subjects as $subject){
					$f=0;
					foreach($subs as $sub){
						if($sub==$subject['Subject']['id']){
							echo $this->Form->input('Student.Subject.'.$i,array(
								'type'=>'checkbox',
								'label'=>$subject['Subject']['display_name'],
								'value'=>$subject['Subject']['id'],
								'checked'
							));
							$f++;
						}
					}
					if($f==0){
						echo $this->Form->input('Student.Subject.'.$i,array(
								'type'=>'checkbox',
								'label'=>$subject['Subject']['display_name'],
								'value'=>$subject['Subject']['id'],
								
							));
					}
					
					
					$i++;
				}
				
				echo "<br/>";
				echo $this->Form->input('path',array(
					'type'=>'file',
					'label'=>'Select Student profile image',
					'div'=>false
				));
				echo "<br/>";
				echo $this->Form->input('Update student details',array(
					'type'=>'submit',
					'class'=>'btn btn-success btn-small',
					'label'=>false,
					'div'=>false
				));	
				echo "<br/>";
				echo $this->Form->end();
			?>
			
	</div>
</div>
