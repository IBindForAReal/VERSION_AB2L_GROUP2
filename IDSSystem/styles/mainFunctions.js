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
    //$("#listOfCategories2").empty();
    //$("#listOfCategories3").empty();
    //$("#categoryDetails").empty();

    $.ajax({
      url: "foodManager/obtainFoodCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfExistingCategories1").html(data);
      }
    });
}

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
    foodName = $("#foodName").val();
    $.ajax({
      url: "foodManager/obtainFoodDetails",
      type: "POST",
      data: {foodName:foodName},

      success: function(data) {
      $("#foodDetails1").html(data);
      }
    });
}

function listSelectableCategories(){
    //$("#listOfCategories2").empty();
    //$("#listOfCategories3").empty();
    //$("#categoryDetails").empty();

    $.ajax({
      url: "foodManager/obtainFoodCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfExistingCategories2").html(data);
      }
    });
}