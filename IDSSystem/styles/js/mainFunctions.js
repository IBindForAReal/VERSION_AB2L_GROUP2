//Category

function listEditCategories(){
    $("#listOfCategories2").empty();
    $("#listOfCategories3").empty();
    $("#categoryDetails").empty();

    $.ajax({
      url: "categoryManager/obtainCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCategories1").html(data);
      }
    });
}

function viewCategoryDetails(){
    $("#foodUnderCategory").empty();
    categoryName = $("#categoryName").val();

    $.ajax({
      url: "categoryManager/obtainCategoryDetails",
      type: "POST",
      data: {categoryName:categoryName},

      success: function(data) {
      $("#categoryDetails").html(data);
      }
    });
}

function listDeleteCategories(){
    $("#listOfCategories1").empty();
    $("#listOfCategories3").empty();

    $.ajax({
      url: "categoryManager/obtainCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCategories2").html(data);
      }
    });
}

function listFoodCategories(){
    $("#listOfCategories1").empty();
    $("#listOfCategories2").empty();
    $("#foodUnderCategory").empty();

    $.ajax({
      url: "categoryManager/obtainCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCategories3").html(data);
      }
    });
}

function viewFoodUnderCategory(){
    $("#categoryDetails").empty();
    categoryName = $("#categoryName").val();

    $.ajax({
      url: "categoryManager/obtainFoodUnderCategory",
      type: "POST",
      data: {categoryName:categoryName},

      success: function(data) {
      $("#foodUnderCategory").html(data);
      }
    });
}

//Cashier

function listEditCashiers(){
    $("#listOfCashiers2").empty();
    $("#cashierDetails1").empty();

    $.ajax({
      url: "cashierManager/obtainCashiers",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCashiers1").html(data);
      }
    });
}

function viewCashierDetails(){
    cashierName = $("#cashierName").val();
    $.ajax({
      url: "cashierManager/obtainCashierDetails",
      type: "POST",
      data: {cashierName:cashierName},

      success: function(data) {
      $("#cashierDetails1").html(data);
      }
    });
}

function listDeleteCashiers(){
    $("#listOfCashiers1").empty();
    $("#cashierDetails2").empty();

    $.ajax({
      url: "cashierManager/obtainCashiers",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCashiers2").html(data);
      }
    });
}

function previewCashierDetails(){
    cashierName = $("#cashierName").val();
    $.ajax({
      url: "cashierManager/obtainCashierDetails",
      type: "POST",
      data: {cashierName:cashierName},

      success: function(data) {
      $("#cashierDetails2").html(data);
      $('.preview').attr('disabled', 'disabled');
      $('#buttonText').attr('value', 'DELETE CASHIER');
      }
    });
}

//food
function listExistingCategories(){
    //$("#listOfCategories1").empty();
    $("#listOfCategories2").empty();
    $("#categoryDetails").empty();

    $.ajax({
      url: "foodManager/obtainFoodCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfExistingCategories1").html(data);
      }
    });
}

/*
function listExistingCategories2(){
    //$("#listOfCategories1").empty();
    $("#listOfCategories2").empty();
    $("#categoryDetails").empty();

    $.ajax({
      url: "foodManager/obtainFoodCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfExistingCategories2").html(data);
      }
    });
}
*/

function listEditFoods(){
    //$("#listOfCashiers2").empty();
    //$("#cashierDetails1").empty();

    $.ajax({
      url: "foodManager/obtainFoods",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfFoods1").html(data);
      }
    });
}

function viewFoodDetails(){
    foodName = $("#foodName2").val();
    $.ajax({
      url: "foodManager/obtainFoodDetails",
      type: "POST",
      data: {foodName:foodName},

      success: function(data) {
        alert(foodName);
      $("#foodDetails1").html(data);
      }
    });
}

function listSelectableCategories(){
    $("#listOfCategories1").empty();
    //$("#listOfCategories3").empty();
    $("#categoryDetails").empty();

    $.ajax({
      url: "foodManager/obtainFoodCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfExistingCategories2").html(data);
      }
    });
}

//category functionalities

function addCategory(){
  $("#queryMessage").empty();
  categoryName = $("#categoryName1").val();
  categoryDesc = $("#categoryDesc1").val();

  $.ajax({
      url: "categoryManager/addCategory",
      type: "POST",
      data: {categoryName:categoryName,categoryDesc:categoryDesc},

      success: function(data) {
      $("#queryMessage").html(data);
      }
    });

}

function editSelectedCategory(){
  $("#queryMessage").empty();
  categoryName = $("#categoryName2").val();
  categoryDesc = $("#categoryDesc2").val();

  $.ajax({
      url: "categoryManager/editCategory",
      type: "POST",
      data: {categoryName:categoryName,categoryDesc:categoryDesc},

      success: function(data) {
      $("#queryMessage").html(data);
      }
    });

}

function deleteSelectedCategory(){
  $("#queryMessage").empty();
  categoryName = $("#categoryName").val();

  $.ajax({
      url: "categoryManager/deleteCategory",
      type: "POST",
      data: {categoryName:categoryName},

      success: function(data) {
      $("#queryMessage").html(data);
      }
    });

}

//food functionalities
$(function() {
   $("#listOfFoods1").empty();
   $('#upload_file').submit(function(e) {
     foodName = $('#foodName').val();
     foodDesc = $('#foodDesc').val();
     foodCategory = $('#foodCategory').val();
     foodQuantity = $('#foodQuantity').val();
     foodPrice = $('#foodPrice').val();

    $.ajax({
      url: "foodManager/setFoodDetails",
      type: "POST",
      data: {foodName:foodName, foodDesc:foodDesc, foodCategory:foodCategory,foodQuantity:foodQuantity, foodPrice:foodPrice},

      success: function(data) {
        //alert("good");
      }
    });

      e.preventDefault();
      $.ajaxFileUpload({
         url         :'foodManager/addFood',
         secureuri      :false,
         fileElementId  :'userfile',
         dataType    : 'json',
         data        : {},

         success  : function (data, status)
         {
            if(data.status != 'error')
            {
               //alert(data.status);
            }
            //alert(data.msg);
             $("#queryMessage").html(data.msg);
         }
      });
      return false;
   });
});

function editSelectedFood(){
  $("#queryMessage").empty();
  foodName = $("#foodName2").val();
  foodDesc = $("#foodDesc2").val();
  foodCategory = $("#foodCategory").val();
  foodQuantity = $("#foodQuantity2").val();
  foodPrice = $("#foodPrice2").val();

  $.ajax({
      url: "foodManager/editFood",
      type: "POST",
      data: {foodName:foodName, foodDesc:foodDesc, foodCategory:foodCategory, foodQuantity:foodQuantity, foodPrice:foodPrice},

      success: function(data) {
      $("#queryMessage").html(data);
      }
    });
}

function listDeleteFoods(){
    $.ajax({
      url: "foodManager/obtainDeleteFood",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listofDeleteFoods").html(data);
      }
    });
}

function removeBoxes(){
  inputs = document.deletableFoods.getElementsByTagName('input');
  for(var i=0; i < inputs.length; i++){
    if(inputs[i].className == 'foodBoxes'){
      inputs[i].style.display='none';
      inputs[i].selected = false;
    }
  }
}

function removeBoxes2(){
  inputs = document.searchableFoods.getElementsByTagName('input');
  for(var i=0; i < inputs.length; i++){
    if(inputs[i].className == 'foodBoxes2'){
      inputs[i].style.display='none';
      inputs[i].selected = false;
    }
  }
}

function toogleState(name){
  foodID = name.id;
  document.getElementById(name.id).selected = !document.getElementById(name.id).selected;
}

function deleteSelectedFoods(){
  var selected = new Array();

  //$(document).ready(function() {

  $("input:checkbox[name=selectFoods]:checked").each(function() {
       selected.push($(this).val());
       //alert($(this).val());
  });

  var jsonString = JSON.stringify(selected);
   $.ajax({
        type: "POST",
        url: "foodManager/deleteFoods",
        data: {data : jsonString}, 
        cache: false,

        success: function(data){
          $("#queryMessage").html(data);
        }
    });

  //});
}

  function findInputPattern(pattern){
    $("deletableFoods").empty();
    foundPattern = pattern;
    if(foundPattern != ''){
      $.ajax({
        url: "foodManager/obtainSearchFoods",
        type: "POST",
        data: {foundPattern:foundPattern},

        success: function(data) {
          $("#viewResults").html(data);
        }
      });
    }
    else{
          $("#viewResults").empty();
    }
  }
