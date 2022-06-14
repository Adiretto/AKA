$("document").ready( function () {
	/*menu*/
	$("#full_menu").on("click",function(){
		$("#title").css("display","none");
		$(".title111").css("display","block");
		$(this).css("display","none");
		$("#short_menu").css("display","block")
		last_click.css("display","none");
		$("#menu_1,#menu_2,#menu_3,#menu_4").fadeToggle();
		$("#menu_1,#menu_2,#menu_3,#menu_4").css("display","flex");
	});
	$("#short_menu").on("click",function(){
		$("#title").css("display","block");
		$(".title111").css("display","none");
		$(this).css("display","none");
		$("#full_menu").css("display","block");
		last_click.css("display","none");
		$("#menu_1,#menu_2,#menu_3,#menu_4").fadeToggle();
		$("#menu_1,#menu_2,#menu_3,#menu_4").css("display","flex");
	});
	$("#collapse").on("click",function(){
		$("#collapsibleNavbar").slideToggle();
	})
	var last_click = $("#menu_1");
	$("#Breakfast").on("click", function(){
		last_click = $("#menu_1");
		$(".container2_menu a").removeClass("active");
		$(this).addClass("active");
		$(".title111").css("display","none");
		$("#menu_1").css("display","flex");
		$("#menu_2,#menu_3,#menu_4").css("display","none");
	});
	$("#Lunch").on("click", function(){
		last_click = $("#menu_2");
		$(".container2_menu a").removeClass("active");
		$(this).addClass("active");
		$(".title111").css("display","none");
		$("#menu_2").css("display","flex");
		$("#menu_1,#menu_3,#menu_4").css("display","none");
	});
	$("#Dinner").on("click", function(){
		last_click = $("#menu_3");
		$(".container2_menu a").removeClass("active");
		$(this).addClass("active");
		$(".title111").css("display","none");
		$("#menu_3").css("display","flex");
		$("#menu_2,#menu_1,#menu_4").css("display","none");
	});
	$("#Drinks").on("click", function(){
		last_click = $("#menu_4");
		$(".container2_menu a").removeClass("active");
		$(this).addClass("active");
		$(".title111").css("display","none");
		$("#menu_4").css("display","flex");
		$("#menu_2,#menu_3,#menu_1").css("display","none");
	});
	/*calendar*/
	var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
	console.log(5)
});