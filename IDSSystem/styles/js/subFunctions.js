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

function toogleState(name){
  genId = "#" + name + "Ext";

  document.getElementById(name).selected = !document.getElementById(name).selected;
  if (document.getElementById(name).selected == true){
    $(genId).append('<input type="number" name="orderCount" value="1" min="0" max="50"/>');
  }
  else{
    $(genId).find('input[type="number"]').remove();
  }
}

function removeBoxes3(){
  inputs = document.enlistOrder.getElementsByTagName('input');
  for(var i=0; i < inputs.length; i++){
    if(inputs[i].className == 'orderBoxes'){
      inputs[i].style.display='none';
      inputs[i].selected = false;
    }
  }
}

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