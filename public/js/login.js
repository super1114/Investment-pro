$(document).ready(function(){
	$(".login_btn").on("click", function(e) {
		e.preventDefault();
		var email = $("#email").val();
		var password = $("#password").val();
		if (email==""||password=="") {
			$.toast({
                text:"Please fill the fields.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url:login_url,
			method:'post',
			data:$("#login_form").serialize(),
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