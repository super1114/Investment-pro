$(document).ready(function() {
	$(".edit_btn").on('click', function(e){
		var user_id = $(e.target).closest('tr').data('id');
		var username = $(e.target).closest('tr').data('name');
		var inv = $(e.target).closest('tr').data('inv');
		var com = $(e.target).closest('tr').data('com');
		$(".modal-title").html(username+" wallet");
		$("#user_id").val(user_id);
		$("#inv_amount").val(inv);
		$("#com_amount").val(com);
		$('#edit_modal').modal();
	})
	$(".save_btn").on("click", function(e){
		var user_id = $("#user_id").val();
		var inv = $("#inv_amount").val();
		var com = $("#com_amount").val();
		if (inv==""||com==""||isNaN(inv)||isNaN(com)) {
			$.toast({
                text:"Please input correct value!",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url: save_wallet_url,
			method:'post',
			data: {
				user_id:user_id,
				inv:inv,
				com:com
			},
			dataType:'json',
			success:function(output) {
				if(output.status=="Success") {
					$.toast({
		                text:output.msg,
		                icon: 'success',
		                position: 'top-right'
		            });
		            $('#edit_modal').modal('hide');
		            setTimeout(function() {
		            	document.location.reload();	
		            },1500)
				}else {
					$.toast({
		                text:output.msg,
		                icon: 'error',
		                position: 'top-right'
		            });
		            $('#edit_modal').modal('hide');
				}

			},
			error: function(output) {
				$.toast({
	                text:"Server has issues",
	                icon: 'error',
	                position: 'top-right'
	            });
	            $('#edit_modal').modal('hide');
			}
		})
	})
})