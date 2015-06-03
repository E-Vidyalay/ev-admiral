$(document).ready(function(){
	setTimeout(function(){
		$('.alert').fadeOut(800);
	},2000);
});
$("#topic").on('change',function(event){
    var u=baseUrl+"/QuestionBanks/get_sub_topic/"+$(this).val();
    console.log(u);
    $.ajax({
    	url:u,
    	success:function(data){
    		$("#sbt_div").html(data);
    	},
    	error:function(e){
    		alert("Sorry there was error");
    	}
    })
});
$("#topics").on('change',function(event){
    var u=baseUrl+"/Links/get_sub_topic/"+$(this).val();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#sb_div").html(data);
        },
        error:function(e){
            alert("Sorry there was error"+u);
        }
    })
});