$(document).ready(function(){
//default

/*
 * # - id	. - class
 */
	$(".enlistOrder").show();
	$("#orderList").hide();

	$("#enlist").click(function(){ //enlist order
		$(".enlistOrder").hide();
		$("#orderList").show(900);
	});

	$("#backToOrder").click(function(){
		$("#orderList").hide(900);
		$(".enlistOrder").show(900);
		$(".category1").show(900);
		$(".category2").show(900);
		$(".category3").show(900);
	});

	$("#resetOrder").click(function(){
		$("#orderList").hide(900);
		$(".enlistOrder").show(900);
		$(".category1").show(900);
		$(".category2").show(900);
		$(".category3").show(900);
		$(".category1").fadeTo(400,1);
		$(".category2").fadeTo(400,1);
		$(".category3").fadeTo(400,1);
	});

	$("#CategoryAll").click(function(){
		$(".category1").fadeTo(400,1);
		$(".category2").fadeTo(400,1);
		$(".category3").fadeTo(400,1);
	});

	$("#Category1").click(function(){
		$(".category1").fadeTo(400,1);
		$(".category2").fadeTo(400,0.4);
		$(".category3").fadeTo(400,0.4);
	});

	$("#Category2").click(function(){
		$(".category1").fadeTo(400,0.4);
		$(".category2").fadeTo(400,1);
		$(".category3").fadeTo(400,0.4);
	});

	$("#Category3").click(function(){	
		$(".category1").fadeTo(400,0.4);
		$(".category2").fadeTo(400,0.4);
		$(".category3").fadeTo(400,1);
	});
});
