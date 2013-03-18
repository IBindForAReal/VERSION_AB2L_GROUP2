$(document).ready(function(){
//default

/*
 * # - id	. - class
 */
	//$(".enlistOrder").show();
	//$("#orderList").hide();

	$("#enlist").click(function(){ //enlist order
		$(".enlistOrder").hide();
		$("#orderList").show(900);
	});

	$("#backToOrder").click(function(){
		$("#orderList").hide();
		$(".enlistOrder").show(900);
	});

	$("#resetOrder").click(function(){
		$("#orderList").hide(900);
		$(".enlistOrder").show(900);
		setUnselected();
	});

	$("#finalizeOrder").click(function(){
		addToXML();
		$("#orderList").hide(900);
		$(".enlistOrder").show(900);
		setUnselected();
		alert("Transaction successful!");
	});

});
