$(document).ready(function(){
	setTimeout(function(){
		$('.alert').fadeOut(800);
	},2000);
    $('#picker').colpick({
    layout:'hex',
    submit:0,
    colorScheme:'dark',
    onChange:function(hsb,hex,rgb,el,bySetColor) {
        $(el).css('border-color','#'+hex);
        // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
        if(!bySetColor) $(el).val(hex);
    }
    }).keyup(function(){
    $(this).colpickSetColor(this.value);
});
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