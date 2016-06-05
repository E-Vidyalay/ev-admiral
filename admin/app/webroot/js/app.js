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
                            window.location.replace(location);
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
$(".admindelete").on('click',function(event){
    var u=baseUrl+"/admins/delete/"+$(this).attr('id');
    alert(u);
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
                            window.location.replace(location);
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
// $('form.approvalform').submit(function(event){
//     BootstrapDialog.show({
//         type:BootstrapDialog.TYPE_PRIMARY,
//         title: '<i class="fa fa-exclamation-circle fa-2x"></i> Confirmation',
//         cssClass: 'btn-primary',
//         message: 'Are you sure you want to Confirm?',
//         buttons:[{
//             label: 'Yes',
//             cssClass: 'btn-success',
//             action: function(dialog){
//                 form.submit();
//             }
//         },{
//             label: 'No',
//             action: function(dialog){
//                 dialog.close();
//             }
//         }]
//     })
// })
