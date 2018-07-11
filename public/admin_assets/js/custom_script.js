$(document).ready(function(){
    setTimeout(function () {
		$("#flashmessage").animate({opacity: 1.0}, 1000).fadeOut("900")}, 10000
    );
    $('.status_loader').css("visibility","hidden");
  
    $('#old_call_number').blur(function(){
    $('#file_name').val($('#old_call_number').val()+'.jpg');
    });
    /*$('#submit_photo').click(function(){
	$('#action').val('Process');
    });
    $('#submit_and_new').click(function(){
	$('#action').val('ProcessNew');
    });
    $('#form_photograph').submit(function() {
        $(".body_overlay").show(); 
        return true;
    });*/
    
    
});



function statusModifier(type,element){    
	var id =$(element).attr('data-team');
	$("#loader_"+id).css("visibility","visible");
	var url ='';
	switch (type) {
        case "user_status":
		url = ADMIN_URL+"/user_change_status";
		break;
		case "category_status":
		url = ADMIN_URL+"/category_change_status";
		break;
		  case "class_status":
		url = ADMIN_URL+"/class_change_status";
		break;
			  case "posDirectory_status":
		url = ADMIN_URL+"/posDirectory_status_change";
		break;
	}	
	$.ajax({
		url:url,
		type:"POST",
		data:{"id":id,'_token':CSRF_TOKEN},
		success:function(msg){
			if ($(element).hasClass("btn-success")==true) {
				$(element).addClass("btn-primary");
				$(element).removeClass("btn-success");
				$(element).attr('title','Inactive');
				$(element).html('Inactive <i class="fa fa-spinner fa-spin status_loader" id="loader_'+msg+'"></i>');
				//$(element).find('i').removeClass('fa fa-check-square-o');
				//$(element).find('i').addClass('glyphicon glyphicon-remove-sign');
			}
			else if ($(element).hasClass("btn-primary")==true) {
				$(element).addClass("btn-success");
				$(element).removeClass("btn-primary");
				//$(element).find('i').removeClass('glyphicon glyphicon-remove-sign');
				//$(element).find('i').addClass('fa fa-check-square-o');
				$(element).attr('title','Active');
				$(element).html('Active <i class="fa fa-spinner fa-spin status_loader" id="loader_'+msg+'"></i>');
			}
			
			$("#loader_"+id).css("visibility","hidden");
		}
	});
}
    
 