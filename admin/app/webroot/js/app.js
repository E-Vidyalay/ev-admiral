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
$(".delete").on('click',function(event){
    var u=location+"/delete/"+$(this).attr('id');
    BootstrapDialog.show({
        type: BootstrapDialog.TYPE_DANGER,
        title: '<i class="fa fa-warning fa-2x"></i> Warning',
        cssClass: 'btn-primary',
        message:'Are you sure you want to delete?',
        buttons: [{
                label: 'Yes',
                cssClass: 'btn-success',
                action: function(dialog) {
                    console.log(u);
                    $.ajax({
                        url:u,
                        success:function(data){
                            BootstrapDialog.alert("Sorry there was error"+u);
                            window.location.replace(location);
                        },
                        error:function(e){
                            BootstrapDialog.alert("Sorry there was error"+u);
                        }
                    })
                }
            }, {
                label: 'No',
                action: function(dialog) {
                    dialog.close();
                }
            }]
    });
});
