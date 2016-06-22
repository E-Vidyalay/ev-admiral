<?php
	if($if_topic_data){
		echo $this->Form->input('QuestionBank.topic_id',array('type'=>'select','options'=>$topics,'label'=>'This question belongs to which topic?','class'=>'form-control','div'=>false,'empty'=>'Select topic','required','default','id'=>'topic'));
	}
	else{
		echo $this->Form->input('QuestionBank.topic_id',array('type'=>'select','empty'=>'Select topic','label'=>'This question belongs to which topic?','class'=>'form-control','div'=>false,'empty'=>'Select topic','required','default','id'=>'topic'));
	}
?>
<script type="text/javascript">
$("#topic").on('change',function(event){
    var u=baseUrl+"/QuestionBanks/get_sub_topic/"+$(this).val();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#subt_div").html(data);
        },
        error:function(e){
            alert("Sorry there was error");
        }
    })
});
</script>