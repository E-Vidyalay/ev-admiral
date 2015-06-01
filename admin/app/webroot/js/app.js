$(document).ready(function(){
	setTimeout(function(){
		$('.alert').fadeOut(800);
	},2000);
});
$("#topic").on('change',function(){
    var u="http://"+document.domain + baseUrl+'/QuestionBanks/get_sub_topic/'+$(this).val();
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