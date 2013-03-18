//update the time in the system
function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

//view foods under each category
function categorizeFoods(){
  $.ajax({
      url: "orderManager/obtainCategorization",
      type: "POST",
      data: {},

      success: function(data) {
      $("#cashier_space").html(data);
      }
    });
}

//select or unselect a food
function toogleState(name){
  genId = "#" + name + "Ext";

  document.getElementById(name).selected = !document.getElementById(name).selected;
  if (document.getElementById(name).selected == true){
    $.ajax({
      url: "orderManager/obtainMaxCount",
      type: "POST",
      data: {foodName:name},

      success: function(data) {
        maxCount = data;
        $(genId).append('<input type="number" name="orderCount" value="1" min="0" onkeypress="return false;" max="'+maxCount+'"/>');
      }
    });
  }
  else{
    $(genId).find('input[type="number"]').remove();
  }
}

//remove the square in the checkboxes
function removeBoxes3(){
  inputs = document.enlistOrder.getElementsByTagName('input');
  for(var i=0; i < inputs.length; i++){
    if(inputs[i].className == 'orderBoxes'){
      inputs[i].style.display='none';
      inputs[i].selected = false;
    }
  }
}

//get selected foods
function orderSelectedFoods(){
  var selected = new Array();
  var quantity = new Array();

 // $(document).ready(function() {

  $("input:checkbox[name=selectFoods]:checked").each(function() {
       selected.push($(this).val());
       //alert($(this).val());
       //alert($(this).parent().find('input[type="number"]').val());
       quantity.push($(this).parent().find('input[type="number"]').val());
  });


  var jsonString1 = JSON.stringify(selected);
  var jsonString2 = JSON.stringify(quantity);
   $.ajax({
        type: "POST",
        url: "orderManager/viewOrderSummary",
        data: {data1 : jsonString1, data2 : jsonString2}, 
        cache: false,

        success: function(data){
          $("#orderList").html(data);
          //alert("asdf");
        }
    });
 // });
}

//view the main page
function initializeView(){
  $(".enlistOrder").show();
  $("#orderList").hide();
}

//when reset button is clicked
function setUnselected(){
    $("input:checkbox[name=selectFoods]:checked").each(function() {
       name = $(this).val();
       genId = "#" + name + "Ext";

       $(this).attr('checked', false);
       document.getElementById(name).selected = false;
       $(genId).find('input[type="number"]').remove();
  });
}

//function that add the order details to the xml
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