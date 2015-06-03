$(document).ready(function(){
	setTimeout(function(){
		$('.alert').fadeOut(800);
	},2000);
});
<<<<<<< HEAD
$(':file').filestyle({
	buttonName: "btn-primary"
});

$('.std').on('click',function(){
	var v=$(this).attr('id');
	var baseurl=location.origin;
	var url=baseurl+"/ev-admiral/admin/SubTopics/list_subject/"+v;
	console.log(url);
	$('.std').removeClass("active");
	$(this).addClass("active");
	$.ajax({
	  url: url,
	  success:function(data) {
			//alert(data)
	 		$("#subject-list").html(data);
	 		$("#subject-list-topic").html("");
	 		$('#subtopic').html("");
		},
		error:function(data){
			alert("Error")
		}

	});
});

$(document).on('change','.subject-ls',function(event){

    var v=$(this).val();
    var baseurl=location.origin;
	var url=baseurl+"/ev-admiral/admin/SubTopics/list_subject_topic/"+v;
	console.log(url);
	$.ajax({
	  url: url,
	  success:function(data) {
			//alert(data)
	 		$("#subject-list-topic").html(data);
		},
		error:function(data){
			alert("Error")
		}

	});
  });

$(document).on('change','.topic-ls',function(event){

    var v=$(this).val();
    var baseurl=location.origin;
	var url=baseurl+"/ev-admiral/admin/SubTopics/insert_subtopic/"+v;
	console.log(url);
	$.ajax({
	  url: url,
	  success:function(data) {
			//alert(data)
	 		$("#subtopic").html(data);
		},
		error:function(data){
			alert("Error")
		}

	});
  });
// (function()
// {
// $('form').submit(function()
//       {
//         $.post('/View/Helper/FileHelper.php', function(data1)
//         {
//           console.log(data1);
//           alert(data1);
//           	$('.progress').addClass('active');
//             $('.progress').addClass('progress-striped');
//             $('.progress-bar').text('Complete');
//         });

//         var refreshId = setInterval(function()
//         {
//           $.get('datafile.dat', function(data2)
//           {
//             $('.progress-bar').css('width',data2+'%');
//             if(data2 >= 100)
//             {
//               console.log('finished');
//               $('.progress').removeClass('active');
//               $('.progress').removeClass('progress-striped');
//               $('.progress-bar').text('Complete');
//               clearInterval(refreshId);
//             }
//           });
//         }, 100);
//         return false;
//       });
// })();
=======
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
>>>>>>> 06aaf9d080e18b4da2aca721a2d2e4f44551a480
