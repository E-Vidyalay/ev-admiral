$(document).ready(function(){
	setTimeout(function(){
		$('.alert').fadeOut(800);
	},2000);
});
function randomPassword(length) {
        var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
        var pass = "";
        for (var x = 0; x < length; x++) {
            var i = Math.floor(Math.random() * chars.length);
            pass += chars.charAt(i);
        }
        return pass;
    }

    function generate() {
        $("#AdminPassword").val(randomPassword(10));

        console.log($("#AdminPassword").val());
    }
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
$("#standard").on('change',function(event){
    var u=baseUrl+"/QuestionBanks/get_topic/"+$(this).val();
    console.log(u);
    $.ajax({
        url:u,
        success:function(data){
            $("#st_div").html(data);
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
                        },
                        error:function(e){
                            BootstrapDialog.show({
                                type: BootstrapDialog.TYPE_WARNING,
                                title: '<i class="fa fa-warning fa-2x"></i> Warning',
                                cssClass: 'btn-primary',
                                message:'!! There is some link remain to this data please remove that link before deleting the element. !!',
                                buttons: [{
                                    label: 'OK',
                                    cssClass: 'btn-default',
                                    action: function(d) {
                                        d.close();
                                        dialog.close();
                                    }
                                }]
                            });
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
