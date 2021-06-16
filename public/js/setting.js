$(document).ready(function(){
	$(".update_btn").on("click", function(e){
		e.preventDefault();
		var cur_pass = $("#cur_pass").val();
		var new_pass = $("#new_pass").val();
		var confirm_pass = $("#confirm_pass").val();
		if (cur_pass==""||new_pass==""||confirm_pass=="") {
			$.toast({
                text:"You should fill all fields",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		if(new_pass!=confirm_pass){
			$.toast({
                text:"Confirm password is not same with new password!",
                icon: 'error',
                position: 'top-right'
            });
            return;	
		}
		$.ajax({
			url: save_pwd_url,
			method:"post",
			data:{
				cur_pass:cur_pass,
				new_pass:new_pass
			},
			dataType:'json',
			success: function(output) {
				if (output.status=="Success") {
					$.toast({
		                text:output.msg,
		                icon: 'success',
		                position: 'top-right'
		            });	
		            setTimeout(function(){
		            	document.location = members_url;
		            },1500)
				}else {
					$.toast({
		                text:output.msg,
		                icon: 'error',
		                position: 'top-right'
		            });	
				}
			},
			error: function(output) {
				$.toast({
	                text:"Server has issues",
	                icon: 'error',
	                position: 'top-right'
	            });
			}
		})
	})
})