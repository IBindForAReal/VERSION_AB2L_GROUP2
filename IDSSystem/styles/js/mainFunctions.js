//Category - when a side button is clicked

//side button - add category, add cashier
function clearMessage(){
    $("#queryMessage").empty();
    $("#categoryName1").val("");
    $("#categoryDesc1").val("");
      $("#cashierName1").val("");
      $("#cashierUsername1").val("");
      $("#cashierPassword1").val("");
}

//side button - edit category
function listEditCategories(){
    $("#queryMessage").empty();
    $("#listOfCategories2").empty();
    $("#listOfCategories3").empty();
    $("#categoryDetails").empty();

    $("#categoryName1").val("");
    $("#categoryDesc1").val("");
    //$("#listEarningCashiers").empty();

    $.ajax({
      url: "categoryManager/obtainCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCategories1").html(data);
      }
    });
}

//side button - delete category
function listDeleteCategories(){
    $("#queryMessage").empty();
    $("#listOfCategories1").empty();
    $("#listOfCategories3").empty();
    //$("#listEarningCashiers").empty();

    $("#categoryName1").val("");
    $("#categoryDesc1").val("");

    $.ajax({
      url: "categoryManager/obtainCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCategories2").html(data);
      }
    });
}
//side button - view category
function listFoodCategories(){
    $("#queryMessage").empty();
    $("#listOfCategories1").empty();
    $("#listOfCategories2").empty();
    //$("#foodUnderCategory").empty();
    //$("#listEarningCashiers").empty();

    $("#categoryName1").val("");
    $("#categoryDesc1").val("");

    $.ajax({
      url: "categoryManager/obtainCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCategories3").html(data);
      }
    });
}

//Category - when a submit button is clicked

//submit button - add category
function addCategory(){
  $("#queryMessage").empty();

  categoryName = $("#categoryName1").val();
  categoryDesc = $("#categoryDesc1").val();

  valid = true;
  spaces = 0;

  var i = 0;
  for (i = 0; i < categoryName.length; i++)
  {
    if (!(("a"<= categoryName.charAt(i) && categoryName.charAt(i)<="z") || ("A"<=categoryName.charAt(i) && categoryName.charAt(i)<="Z") || ("0"<= categoryName.charAt(i) && categoryName.charAt(i)<="9") || categoryName.charAt(i)==" " || categoryName.charAt(i)=='-')){
      valid = false;
      i = categoryName.length;
    }
    if(categoryName.charAt(i)==" "){
      spaces += 1;
    }
  }

  if(categoryName == '' || spaces == categoryName.length){
    $("#queryMessage").html("Category name required.");

  }
  else if(!valid){
    $("#queryMessage").html("Letters, numbers, spaces and hyphens only.");
    $("#categoryName1").val("");
  }
  else{
    $.ajax({
        url: "categoryManager/addCategory",
        type: "POST",
        data: {categoryName:categoryName,categoryDesc:categoryDesc},

        success: function(data) {
        $("#queryMessage").html(data);
        $("#categoryName1").val("");
        $("#categoryDesc1").val("");
        }
      });
  }
}

//button - select in edit
function viewCategoryDetails(){
    $("#queryMessage").empty();
    //$("#foodUnderCategory").empty();
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

//button - save changes in edit
function editSelectedCategory(){
  $("#queryMessage").empty();
  categoryName = $("#categoryName2").val();
  categoryDesc = $("#categoryDesc2").val();

  if(categoryDesc == ""){
    if (confirm('Retain Description?'))
    {
      categoryDesc = document.getElementById("categoryDesc2").placeholder;
    }
  }

  $.ajax({
      url: "categoryManager/editCategory",
      type: "POST",
      data: {categoryName:categoryName,categoryDesc:categoryDesc},

      success: function(data) {
      $("#queryMessage").html(data);
      $("#categoryDetails").empty();
      }
    });

}

//submit button - delete in delete
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

    listDeleteCategories();
}

//submit button - select in view category
function viewFoodUnderCategory(){
    $("#queryMessage").empty();
    $("#foodUnderCategory").empty();

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

//Category - when validity of input using database

//category name duplicate
function checkCategoryNameDuplicate(categoryName){
  $("#queryMessage").empty();

  if(categoryName != ''){
      $.ajax({
        url: "categoryManager/duplicateNameCheck",
        type: "POST",
        data: {categoryName:categoryName},

        success: function(data) {
          if(data == 0){
            $("#queryMessage").empty();
            $('#addButton').attr('disabled',false);
          }
          else{
            $("#queryMessage").html("Category name is already existing.");
            $('#addButton').attr('disabled',true);
          }
        }
      });
    }
    else{
          $("#queryMessage").empty();
          $('#addButton').attr('disabled',false);
    }
}

//Cashier - when a side button is clicked

//side button - edit cashier
function listEditCashiers(){
  $("#queryMessage").empty();
    $("#listOfCashiers2").empty();
    $("#cashierDetails1").empty();

      $("#cashierName1").val("");
      $("#cashierUsername1").val("");
      $("#cashierPassword1").val("");

    $.ajax({
      url: "cashierManager/obtainCashiers",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCashiers1").html(data);
      }
    });
}

//side button - delete cashier
function listDeleteCashiers(){
    $("#queryMessage").empty();
    $("#listOfCashiers1").empty();
    $("#cashierDetails2").empty();

      $("#cashierName1").val("");
      $("#cashierUsername1").val("");
      $("#cashierPassword1").val("");

    $.ajax({
      url: "cashierManager/obtainCashiers",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfCashiers2").html(data);
      }
    });
}

//Cashier - when a submit button is clicked

//submit button - add in add cashier
function addCashier(){
  $("#queryMessage").empty();
  cashierName = $("#cashierName1").val();
  cashierUsername = $("#cashierUsername1").val();
  cashierPassword = $("#cashierPassword1").val();

  valid1 = true;
  valid2 = true;
  spaces1 = 0;
  spaces2 = 0;
  spaces3 = 0;

  var i = 0;
  for (i = 0; i < cashierName.length; i++)
  {
    if (!(("a"<= cashierName.charAt(i) && cashierName.charAt(i)<="z") || ("A"<=cashierName.charAt(i) && cashierName.charAt(i)<="Z") || cashierName.charAt(i)==" " || cashierName.charAt(i)=='-')){
      valid1 = false;
      i = cashierName.length;
    }
    if(cashierName.charAt(i)==" "){
      spaces1 += 1;
    }
  }

  for (i = 0; i < cashierUsername.length; i++)
  {
    if (!(("a"<= cashierUsername.charAt(i) && cashierUsername.charAt(i)<="z") || ("A"<=cashierUsername.charAt(i) && cashierUsername.charAt(i)<="Z") || ("0"<= cashierUsername.charAt(i) && cashierUsername.charAt(i)<="9") || cashierUsername.charAt(i)==" " || cashierUsername.charAt(i)=='-')){
      valid2 = false;
      i = cashierUsername.length;
    }
    if(cashierUsername.charAt(i)==" "){
      spaces2 += 1;
    }
  }

  for (i = 0; i < cashierPassword.length; i++)
  {
     if(cashierPassword.charAt(i)==" "){
      spaces3 += 1;
    }
  }

  if((cashierName == '' || spaces1 == cashierName.length) && (cashierUsername == '' || spaces2 == cashierUsername.length)){
    if(cashierPassword == '' || spaces3 == cashierPassword.length){
      $("#queryMessage").html("Cashier name, username and password required.");
    }
    else{
    $("#queryMessage").html("Cashier name and username required.");
    }
  }
  else if(cashierName == '' || spaces1 == cashierName.length){
    if(cashierPassword == '' || spaces3 == cashierPassword.length){
      $("#queryMessage").html("Cashier name and password required.");
    }
    else{
    $("#queryMessage").html("Cashier name required.");
    }
  }
  else if(cashierUsername == '' || spaces2 == cashierUsername.length){
    if(cashierPassword == '' || spaces3 == cashierPassword.length){
      $("#queryMessage").html("Cashier username and password required.");
    }
    else{
    $("#queryMessage").html("Cashier username required.");
    }
  }
  else if(cashierPassword == '' || spaces3 == cashierPassword.length){
      $("#queryMessage").html("Cashier password required.");
    }
  else if(!valid1 && !valid2){
    $("#queryMessage").html("Letters, spaces and hyphens for name and username. Numbers also allowed in username.");
     $("#cashierName1").val("");
     $("#cashierUsername1").val("");
  }
  else if(!valid1){
    $("#queryMessage").html("Letters, spaces and hyphens only for name.");
     $("#cashierName1").val("");
  }
  else if(!valid2){
    $("#queryMessage").html("Letters, numbers, spaces and hyphens only for username.");
     $("#cashierUsername1").val("");
  }
  else{
  $.ajax({
      url: "cashierManager/addCashier",
      type: "POST",
      data: {cashierName:cashierName,cashierUsername:cashierUsername,cashierPassword:cashierPassword},

      success: function(data) {
      $("#queryMessage").html(data);
      $("#cashierName1").val("");
      $("#cashierUsername1").val("");
      $("#cashierPassword1").val("");
      }
    });
  }
}

//button - select in edit cashier
function viewCashierDetails(){
  $("#queryMessage").empty();

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

//submit button - save changes in edit cashier
function editSelectedCashier(){
  $("#queryMessage").empty();
  cashierName = $("#cashierName2").val();
  cashierUsername = $("#cashierUsername2").val();
  cashierPassword = $("#cashierPassword2").val();

  perform = true;
  valid = true;
  spaces = 0;
  var i = 0;
  retain1 = true;
  retain2 = true;

  for (i = 0; i < cashierUsername.length; i++)
  {
    if (!(("a"<= cashierUsername.charAt(i) && cashierUsername.charAt(i)<="z") || ("A"<=cashierUsername.charAt(i) && cashierUsername.charAt(i)<="Z") || ("0"<= cashierUsername.charAt(i) && cashierUsername.charAt(i)<="9") || cashierUsername.charAt(i)==" " || cashierUsername.charAt(i)=='-')){
      valid = false;
      i = cashierUsername.length;
    }
    if(cashierUsername.charAt(i)==" "){
      spaces += 1;
    }
  }  
  if(cashierPassword == ""){
    if (confirm('Retain Password?'))
    {
      cashierPassword = document.getElementById("cashierPassword2").placeholder;
    }
    else{
      perform = false;
      retain1 = false;
    }
  }
  if(cashierUsername == ""){
    if (confirm('Retain Username?'))
    {
      cashierUsername = document.getElementById("cashierUsername2").placeholder;
    }
    else{
       perform = false;
       retain2 = false;
    }
  }
  else if(spaces == cashierUsername.length){
    $("#queryMessage").html("Cashier username required.");
    perform = false;
  }
  else if(!valid){
    $("#queryMessage").html("Letters, numbers, spaces and hyphens only for username.");
    perform = false;
  }
  else{};

  if(!retain1 && !retain2){
    $("#queryMessage").html("Cashier username and password required.");
  }
  else if(!retain1){
    $("#queryMessage").html("Cashier password required.");
  }
  else if(!retain2){
    $("#queryMessage").html("Cashier username required.");
  }
  else{

    if(perform){
    $.ajax({
        url: "cashierManager/editCashier",
        type: "POST",
        data: {cashierName:cashierName,cashierUsername:cashierUsername,cashierPassword:cashierPassword},

        success: function(data) {
        $("#queryMessage").html(data);
        $("#cashierDetails1").empty();
        }
      });
    }
  }
}

//submit button - delete in delete cashier
function deleteSelectedCashier(){
  $("#queryMessage").empty();
  cashierName = $("#cashierName").val();

  $.ajax({
      url: "cashierManager/deleteCashier",
      type: "POST",
      data: {cashierName:cashierName},

      success: function(data) {
      $("#queryMessage").html(data);
      }
    });

  listDeleteCashiers();
}


//Cashier - when validity of input using database

//cashier name duplicate
function checkCashierNameDuplicate(cashierName){
  $("#queryMessage").empty();

  if(cashierName != ''){
      $.ajax({
        url: "cashierManager/duplicateNameCheck",
        type: "POST",
        data: {cashierName:cashierName},

        success: function(data) {
          if(data == 0){
            $("#queryMessage").empty();
            $('#addButton2').attr('disabled',false);
          }
          else{
            $("#queryMessage").html("Cashier name is already existing.");
            $('#addButton2').attr('disabled',true);
          }
        }
      });
    }
    else{
          $("#queryMessage").empty();
          $('#addButton2').attr('disabled',false);
    }
}

//cashier username duplicate
function checkCashierUsernameDuplicate(cashierUsername){
  $("#queryMessage").empty();

  if(cashierUsername != ''){
      $.ajax({
        url: "cashierManager/duplicateUsernameCheck",
        type: "POST",
        data: {cashierUsername:cashierUsername},

        success: function(data) {
          if(data == 0){
            $("#queryMessage").empty();
            $('#addButton2').attr('disabled',false);
            $('#saveButton2').attr('disabled',false);
          }
          else{
            $("#queryMessage").html("Cashier username is already existing.");
            $('#addButton2').attr('disabled',true);
            $('#saveButton2').attr('disabled',true);
          }
        }
      });
    }
    else{
          $("#queryMessage").empty();
          $('#addButton2').attr('disabled',false);
          $('#saveButton2').attr('disabled',false);

    }
}

//Food - when a side button is clicked

//side button - add food
function listExistingCategories(){
  $("#queryMessage").empty();
  $("#foodDetails1").empty();
  $("#foodName3").val("");
  $("#viewResults").empty();



    //$("#listOfCategories1").empty();
    $("#listOfCategories2").empty();
    $("#categoryDetails").empty();
    //$("#listEarningCashiers").empty();

    $('#foodName').val("");
    $('#foodDesc').val("");
    $('#foodQuantity').val("");
    $('#foodPrice').val("");


    $.ajax({
      url: "foodManager/obtainFoodCategories",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfExistingCategories1").html(data);
      }
    });
}

//side button - edit food
function listEditFoods(){
  $("#queryMessage").empty();
  $("#foodDetails1").empty();
  $("#foodName3").val("");
  $("#viewResults").empty();




    //$("#listOfCashiers2").empty();
    //$("#cashierDetails1").empty();
    $('#foodName').val("");
    $('#foodDesc').val("");
    $('#foodQuantity').val("");
    $('#foodPrice').val("");

    $.ajax({
      url: "foodManager/obtainFoods",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listOfFoods1").html(data);
      }
    });
}

//side button - delete food
function listDeleteFoods(){
  $("#queryMessage").empty();
  $("#foodDetails1").empty();
  $("#foodName3").val("");
  $("#viewResults").empty();



    $('#foodName').val("");
    $('#foodDesc').val("");
    $('#foodQuantity').val("");
    $('#foodPrice').val("");

    $.ajax({
      url: "foodManager/obtainDeleteFood",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listofDeleteFoods").html(data);
      }
    });
}


//Food - when a submit button is clicked

//submit button - add in add food
$(function() {
   //$("#listOfFoods1").empty();
  $("#queryMessage").empty();



   $('#upload_file').submit(function(e) {
     foodName = $('#foodName').val();
     foodDesc = $('#foodDesc').val();
     foodCategory = $('#foodCategory').val();
     foodQuantity = $('#foodQuantity').val();
     foodPrice = $('#foodPrice').val();

  valid = true;
  spaces = 0;

  var i = 0;
  for (i = 0; i < foodName.length; i++)
  {
    if (!(("a"<= foodName.charAt(i) && foodName.charAt(i)<="z") || ("A"<=foodName.charAt(i) && foodName.charAt(i)<="Z") || ("0"<= foodName.charAt(i) && foodName.charAt(i)<="9") || foodName.charAt(i)==" " || foodName.charAt(i)=='-')){
      valid = false;
      i = foodName.length;
    }
    if(foodName.charAt(i)==" "){
      spaces += 1;
    }
  }

  if(foodName == '' || spaces == foodName.length){
    $("#queryMessage").html("Food name required.");

  }
  else if(!valid){
    $("#queryMessage").html("Letters, numbers, spaces and hyphens only.");
    $('#foodName').val("");
  }
  else{
    $.ajax({
      url: "foodManager/setFoodDetails",
      type: "POST",
      data: {foodName:foodName, foodDesc:foodDesc, foodCategory:foodCategory,foodQuantity:foodQuantity, foodPrice:foodPrice},

      success: function(data) {
        processInsertion();
        listExistingCategories();
        $('#foodName').val("");
        $('#foodDesc').val("");
        $('#foodQuantity').val("");
        $('#foodPrice').val("");
      }
    });
  }
      return false;
   });
});

//processing of file selected in add food
function processInsertion(){
  //e.preventDefault();
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
}

//submit button - select in edit food
function viewFoodDetails(){
    foodName = $("#foodName2").val();
    $.ajax({
      url: "foodManager/obtainFoodDetails",
      type: "POST",
      data: {foodName:foodName},

      success: function(data) {
        //alert(foodName);
      $("#foodDetails1").html(data);
      }
    });
}


//submit button - delete in delete food
function deleteSelectedFoods(){
  var selected = new Array();

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

   listDeleteFoods();

}

//Food - when searching using database

//Food Name search
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


//Food - when validity of input using database

//Food name duplicate
function checkFoodNameDuplicate(foodName){
  //$("#queryMessage").empty();

  if(foodName != ''){
      $.ajax({
        url: "foodManager/duplicateNameCheck",
        type: "POST",
        data: {foodName:foodName},

        success: function(data) {
          if(data == 0){
            $("#queryMessage").empty();
            $('#addButton3').attr('disabled',false);
          }
          else{
            $("#queryMessage").html("Food name is already existing.");
            $('#addButton3').attr('disabled',true);
          }
        }
      });
    }
    else{
          $("#queryMessage").empty();
          $('#addButton3').attr('disabled',false);
    }
}

function listSelectableCategories(){
    $("#listOfCategories1").empty();
    //$("#listOfCategories3").empty();
    $("#categoryDetails").empty();
    $("#listEarningCashiers").empty();
    

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


function editSelectedFood(){
  $("#queryMessage").empty();
  foodName = $("#foodName2").val();
  foodDesc = $("#foodDesc2").val();
  foodCategory = $("#foodCategory").val();
  foodQuantity = $("#foodQuantity2").val();
  foodPrice = $("#foodPrice2").val();

  valid = true;

  if(foodDesc == ""){
    if (confirm('Retain Description?')){
      foodDesc = document.getElementById("foodDesc2").placeholder;
    }
  }
  if(foodQuantity == ""){
    if(confirm('Retain Quantity?')){
      foodQuantity = document.getElementById("foodQuantity2").placeholder;
      if(foodPrice == ""){
        if(confirm('Retain Price?')){
          foodPrice = document.getElementById("foodPrice2").placeholder;
        }
        else{
          $("#queryMessage").html("Food price required.");
          valid = false;
        }
      }
    }
    else{
      $("#queryMessage").html("Food quantity required.");
      valid = false;
    }
  }

  if(valid){
    $.ajax({
        url: "foodManager/editFood",
        type: "POST",
        data: {foodName:foodName, foodDesc:foodDesc, foodCategory:foodCategory, foodQuantity:foodQuantity, foodPrice:foodPrice},

        success: function(data) {
        $("#queryMessage").html(data);
        $("#foodDetails1").empty();
        }
      });
  }
}

// removing square in textboxes
function removeBoxes(){
  inputs = document.deletableFoods.getElementsByTagName('input');
  for(var i=0; i < inputs.length; i++){
    if(inputs[i].className == 'foodBoxes'){
      inputs[i].style.display='none';
      inputs[i].selected = false;
    }
  }
}

// removing square in textboxes
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

  function listEarningCashiers(){
    $("#listOfCashiers1").empty();
    $("#listOfCashiers2").empty();
    $("#cashierDetails1").empty();

    $.ajax({
      url: "cashierManager/obtainCashiers",
      type: "POST",
      data: {},

      success: function(data) {
      $("#listEarningCashiers").html(data);
      }
    });
}






