function initializeView(){
	$(".enlistOrder").show();
	$("#orderList").hide();
}

function setUnselected(){
    $("input:checkbox[name=selectFoods]:checked").each(function() {
       name = $(this).val();
       genId = "#" + name + "Ext";

       $(this).attr('checked', false);
       document.getElementById(name).selected = false;
       $(genId).find('input[type="number"]').remove();
  });
}

function addToXML(){
  var selected = new Array();
  var quantity = new Array();

 // $(document).ready(function() {

  $("input:checkbox[name=selectFoods]:checked").each(function() {
       selected.push($(this).val());
       //alert($(this).val());
       //alert($(this).parent().find('input[type="number"]').val());
       quantity.push($(this).parent().find('input[type="number"]').val());
  });

  var cost = $("#cost").text();

  var jsonString1 = JSON.stringify(selected);
  var jsonString2 = JSON.stringify(quantity);
   $.ajax({
        type: "POST",
        url: "orderManager/xmlAddOrder",
        data: {data1 : jsonString1, data2 : jsonString2, cost : cost}, 
        cache: false,

        success: function(data){
          //alert(data);
          //alert("asdf");
        }
    });
}

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
