$(document).ready(function(){
//default
	$("#space1").show();
	$("#space2").hide();
	$("#space3").hide();
	$("#space4").hide();

		//VIEW BY DATE
		$("#viewByDate3").hide();
		$("#viewByDate2").hide();
		$("#viewByDate1").show();

	$("#show1").click(function(){ //add food
		$("#space1").show(900);
		$("#space2").hide(900);
		$("#space3").hide(900);
		$("#space4").hide(900);

		//VIEW BY DATE
		$("#viewByDate3").hide();
		$("#viewByDate2").hide();
		$("#viewByDate1").show();
		});

	$("#show2").click(function(){ //edit food
		$("#space1").hide(900);
		$("#space2").show(900);
		$("#space3").hide(900);
		$("#space4").hide(900);

		//EDIT FOOD
		$("#editFood2").hide();
		$("#editFood1").show();

		//EDIT CATEGORY
		$("#editCategory2").hide();
		$("#editCategory1").show();

		//EDIT CASHIER
		$("#editCashier2").hide();
		$("#editCashier1").show();

		//VIEW BY CASHIER
		$("#viewByCashier3").hide();
		$("#viewByCashier2").hide();
		$("#viewByCashier1").show();
		});

	$("#show3").click(function(){ //delete food
		$("#space1").hide(900);
		$("#space2").hide(900);
		$("#space3").show(900);
		$("#space4").hide(900);

		//DELETE CATEGORY
		$("#deleteCategory2").hide();
		$("#deleteCategory1").show();

		//DELETE CATSHIER
		$("#disableCashier2").hide();
		$("#disableCashier1").show();

		});

	$("#show4").click(function(){ //search food
		$("#space1").hide(900);
		$("#space2").hide(900);
		$("#space3").hide(900);
		$("#space4").show(900);

		//SEARCH FOOD
		$("#searchFood2").hide();
		$("#searchFood3").hide();
		$("#searchFood1").show

		//VIEW FOODS UNDER CATEGORY
		$("#viewFoodsUnderCategory2").hide();
		$("#viewFoodsUnderCategory3").hide();
		$("#viewFoodsUnderCategory1").show();
		});



	$("#editFoodBtn").click(function(){
		$("#editFood2").show(900);
	});

	$("#searchFoodBtn").click(function(){
		$("#searchFood2").show(900);
		$("#searchFood3").show(900);
	});

	$("#editCategoryBtn").click(function(){
		$("#editCategory2").show(900);
	});

	$("#deleteCategoryBtn").click(function(){
		$("#deleteCategory2").show(900);
	});

	$("#viewFoodsUnderCategoryBtn").click(function(){
		$("#viewFoodsUnderCategory2").show(900);
		$("#viewFoodsUnderCategory3").show(900);
	});

	$("#editCashierBtn").click(function(){
		$("#editCashier2").show(900);
	});

	$("#disableCashierBtn").click(function(){
		$("#disableCashier2").show(900);
	});

	$("#viewByCashierBtn1").click(function(){
		$("#viewByCashier3").hide();
		$("#viewByCashier2").show(900);
	});

	$("#viewByCashierBtn2").click(function(){
		$("#viewByCashier2").hide();
		$("#viewByCashier3").show(900);
	});

	$("#viewByDateBtn1").click(function(){
		$("#viewByDate3").hide();
		$("#viewByDate2").show(900);
	});

	$("#viewByDateBtn2").click(function(){
		$("#viewByDate2").hide();
		$("#viewByDate3").show(900);
	});




});
