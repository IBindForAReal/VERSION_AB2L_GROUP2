$(document).ready(function(){
//default
	$("#space1").show();
	$("#space2").hide();
	$("#space3").hide();
	$("#space4").hide();

	$("#show1").click(function(){ //add food
		$("#space1").show(900);
		$("#space2").hide(900);
		$("#space3").hide(900);
		$("#space4").hide(900);
		});

	$("#show2").click(function(){ //edit food
		$("#space1").hide(900);
		$("#space2").show(900);
		$("#space3").hide(900);
		$("#space4").hide(900);
		});

	$("#show3").click(function(){ //delete food
		$("#space1").hide(900);
		$("#space2").hide(900);
		$("#space3").show(900);
		$("#space4").hide(900);
		});

	$("#show4").click(function(){ //search food
		$("#space1").hide(900);
		$("#space2").hide(900);
		$("#space3").hide(900);
		$("#space4").show(900);
		});
});