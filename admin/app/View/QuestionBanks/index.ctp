<br/>
<div class="row">
	<div class="col-lg-5">
		<h2>Questions</h2>
	</div>
	<div class="col-lg-7" style="text-align: right">
			<p style="margin-top: 20px"><?php echo $this->Html->link('Add New Question',array('controller'=>'QuestionBanks','action'=>'insert'),array('class'=>'btn btn-primary'));?></p>
	</div>
	</div>
	<hr/>
    <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Question bank
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper" id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Question</th>
								<th>Subject/Topic</th>
                                <th>Marking</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($questions as $question){ ?>
                           	<tr>
								<td data-title="Question"> <?php  echo $question['QuestionBank']['question']; ?> </td>
								<td data-title="Subject/Topic"> <?php  echo $question['Topic']['display_name']; ?> </td>
                                <td data-title="Marking"> 
                                    <?php  if($question['Markingscheme']['display_name']==null){
                                        echo 'Not set Yet';
                                    }
                                    else{echo $question['Markingscheme']['display_name'];} ?> </td>
								<td data-title="Action"> <?php echo $this->Html->link('Update question',array('controller'=>'QuestionBanks','action'=>'update',$question['QuestionBank']['id']),array('class'=>'btn btn-sm btn-primary hidden-xs'));
                                    echo $this->Html->link('Update question',array('controller'=>'QuestionBanks','action'=>'update',$question['QuestionBank']['id']),array('class'=>'btn btn-sm btn-primary visible-xs'));
									echo "&nbsp;&nbsp;&nbsp;&nbsp;";
									echo '<a id="'.$question['QuestionBank']['id'].'" class="btn btn-danger btn-sm delete hidden-xs">Delete question</a>';
                                    echo '<a id="'.$question['QuestionBank']['id'].'" class="btn btn-danger btn-sm delete visible-xs">Delete question</a>';
								?>
								</td> 
							</tr> 	
							<?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
	</div>
    </div>