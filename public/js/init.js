$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".quick_nav").on("click", function(e) {
	if ($(".dis_none").css("display")=="none") {
		$(".dis_none").css("display","block");	
	}else {
		$(".dis_none").css("display","none");
	}
})