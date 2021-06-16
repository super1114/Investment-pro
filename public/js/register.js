$(document).ready(function(){
	$(".register_btn").on("click", function(e) {
		e.preventDefault();
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var username = $("#username").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var confirm_password = $("#confirm_password").val();
		var referralid = $("#referralid").val();
		var bit_addr = $("#bit_addr").val();
		if (firstname==""||lastname==""||username==""||email==""||password==""||confirm_password==""||referralid==""||bit_addr=="") {
			$.toast({
                text:"Please fill the fields.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		if (password!=confirm_password) {
			$.toast({
                text:"Confirm password is not correct.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url:reg_url,
			method:'post',
			data:$("#reg_form").serialize(),
			success:function(output) {
				document.location.reload();
			},
			error: function(output, errors) {
				var key = Object.keys(output.responseJSON.errors)[0];
				if (key=="email") {
					$.toast({
		                text: output.responseJSON.errors.email[0],
		                icon: 'error',
		                position: 'top-right'
		            });
		            return;
				}
				if (key=="password") {
					$.toast({
		                text: output.responseJSON.errors.password[0],
		                icon: 'error',
		                position: 'top-right'
		            });
				}
			}
		})
	})
})