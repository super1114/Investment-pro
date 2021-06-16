$(document).ready(function() {
	$(".save_bitcoin").on("click", function(e) {
		var rate  = $("#bitcoin_rate").val();
		if (rate=="") {
			$.toast({
                text:"Please input correct value!",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url:save_bitcoin_url,
			method:'post',
			data:{
				bitcoin:rate,
			},
			dataType:'json',
			success: function(output) {
				if (output.status=='Success') {
					$.toast({
		                text:output.msg,
		                icon: 'success',
		                position: 'top-right'
		            });
		           	setTimeout(function(){
		           		document.location.reload();
		           	},1500);
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