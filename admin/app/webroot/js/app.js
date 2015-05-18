$(document).ready(function(){
	setTimeout(function(){
		$('.alert').fadeOut(800);
	},2000);
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