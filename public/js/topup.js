$(document).ready(function(){
	var investment = 0;
	$(".inv_option").on("click", function(e) {
		$(".inv_option").removeClass("selected");
		$(e.target).addClass("selected");
		if($(e.target).hasClass('yellow_btn')){
			investment = 1000;
		}else{
			investment = 500;
		}
	})
	$(".topup_btn").on("click", function(e){
		if (investment==0) {
			$.toast({
                text:"Please select investment option",
                showHideTransition: 'slide',
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url:topup_url,
			method:"post",
			dataType:'json',
			data:{
				investment:investment
			},
			success:function(output) {
				if (output.status=="Success") {
					$.toast({
		                text:output.msg,
		                showHideTransition: 'slide',
		                icon: 'success',
		                position: 'top-right'
		            });
		            setTimeout(function(){
		            	document.location = members_url;
		            },2000);
				}else {
					$.toast({
		                text:output.msg,
		                icon: 'error',
		                showHideTransition: 'slide',
		                position: 'top-right'
		            });
		            setTimeout(function(){
		            	document.location = members_url;
		            },2000);
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