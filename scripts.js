$(document).ready(function() {


//For collapsible navbar toggler/button
	$("#navbar-toggler").on('click', function(){
		if($("#navbar-toggler").attr("aria-expanded") == "true"){
			$("#menu-symbol").removeClass("fa-times");
			$("#menu-symbol").addClass("fa-caret-down");
		}else{
			$("#menu-symbol").removeClass("fa-caret-down");
			$("#menu-symbol").addClass("fa-times");
		}
	})
//Links for index.php to send user to specific services
	$("#packagesLink").click(function(){
		window.location.href='services.php';
		}, $("html, body").animate({scrollToP: $("#packages").offset().top}, "slow"));
	
})//End ready function