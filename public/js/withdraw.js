$(document).ready(function(){
	$(".investment_withdraw").on("click", function(e){
		if (can_withdraw==0||can_withdraw==false) {
			$.toast({
                text:"You can withdraw your investment after 30 days of TOP UP.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		if ($("#investment_amount").val()==""||isNaN($("#investment_amount").val())) {
			$.toast({
                text:"Please enter the correct amount value",
                icon: 'error',
                position: 'top-right'
            });
            return;	
		}
		var amount = parseInt($("#investment_amount").val());
		if (amount>investment) {
			$.toast({
                text:"You can withdraw "+investment+"USD max.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url: investment_withdraw_url,
			method:"post",
			data:{
				amount:amount
			},
			dataType:'json',
			success: function(output) {
				if(output.status=="Success"){
					$.toast({
		                text:output.msg,
		                icon: 'success',
		                position: 'top-right'
		            });
				}
			}
		})
	})
	$(".profit_withdraw").on("click", function(e){
		if ($("#profit_amount").val()==""||isNaN($("#profit_amount").val())) {
			$.toast({
                text:"Please enter the correct amount value",
                icon: 'error',
                position: 'top-right'
            });
            return;	
		}
		if (profit==0) {
			$.toast({
                text:"Your profit is 0USD",
                icon: 'error',
                position: 'top-right'
            });
            return;	
		}
		var amount = parseInt($("#profit_amount").val());
		if (amount>profit) {
			$.toast({
                text:"You can withdraw "+profit+"USD max.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url: profit_withdraw_url,
			method:"post",
			data:{
				amount:amount
			},
			dataType:'json',
			success: function(output) {
				if(output.status=="Success"){
					$.toast({
		                text:output.msg,
		                icon: 'success',
		                position: 'top-right'
		            });
				}
			}
		})
	})
	$(".commission_withdraw").on("click", function(e){
		if ($("#commission_amount").val()==""||isNaN($("#commission_amount").val())) {
			$.toast({
                text:"Please enter the correct amount value",
                icon: 'error',
                position: 'top-right'
            });
            return;	
		}
		if (commission==0) {
			$.toast({
                text:"Your commission is 0USD",
                icon: 'error',
                position: 'top-right'
            });
            return;	
		}
		var amount = parseInt($("#commission_amount").val());
		if (amount>commission) {
			$.toast({
                text:"You can withdraw "+commission+"USD max.",
                icon: 'error',
                position: 'top-right'
            });
            return;
		}
		$.ajax({
			url: commission_withdraw_url,
			method:"post",
			data:{
				amount:amount
			},
			dataType:'json',
			success: function(output) {
				if(output.status=="Success"){
					$.toast({
		                text:output.msg,
		                icon: 'success',
		                position: 'top-right'
		            });
				}
			}
		})
	})
})