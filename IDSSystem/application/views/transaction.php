<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<head>
		<title>McJolly</title>
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="stylesheet" href="<?php echo base_url();?>styles/style.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/menu.css" type="text/css"></link>
		<link rel="stylesheet" href="<?php echo base_url();?>styles/order.css" type="text/css"></link>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="<?php echo base_url();?>styles/order.js"></script>

		
	</head>
	<body>
		<div class="menu">
			<ul class="ca-menu">
				<li>
					<a href='<?php echo base_url();?>index.php/logManager/logout'>
						<span class="ca-icon">X</span>
						<div class="ca-content">
							<p class="ca-main">Log out</p>
						</div>
					</a>
				</li>
			</ul>	
		</div>	
			
		<!--<div id="cashier_space">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /><br />
			At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. <br /><br />
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br />
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<br /><br />
			At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
		</div>-->

		<div id="cashier_space">
			<form class="enlistOrder">
				<a href="#" id="CategoryAll">ALL</a>
				<a href="#" id="Category1">CATEGORY 1</a>
				<a href="#" id="Category2">CATEGORY 2</a>
				<a href="#" id="Category3">CATEGORY 3</a>
				<a href="#" id="enlist">ENLIST ORDER</a><br /><br /><br />
				

				<a class="category1"><img src="<?php echo base_url();?>styles/img/skybg.jpg"/>
			    <span>Food Item # 1<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 2<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/>

			    <a class="category1"><img src="styles/img/skybg.jpg"/>
			    <span>Food Item # 3<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 4<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category1"><img src="styles/img/skybg.jpg"/>
			    <span>Food Item # 5<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category3"><img src="styles/img/burger2.jpg"/>
			    <span>Food Item # 6<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

				<a class="category1"><img src="styles/img/skybg.jpg"/>
				<span>Food Item # 7<br/>
					Category:<br/>					
					Quantity: *database?*<br/>
					Price:
				</span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 8<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category1"><img src="styles/img/skybg.jpg"/>
			    <span>Food Item # 9<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 10<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category1"><img src="styles/img/skybg.jpg"/>
			    <span>Food Item # 11<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 12<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category3"><img src="styles/img/burger2.jpg"/>
			    <span>Food Item # 13<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 14<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category3"><img src="styles/img/burger2.jpg"/>
			    <span>Food Item # 15<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 16<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

				<a class="category1"><img src="styles/img/skybg.jpg"/>
				<span>Food Item # 17<br/>
					Category:<br/>
					Quantity: *database?*<br/>
					Price:
				</span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category3"><img src="styles/img/burger2.jpg"/>
			    <span>Food Item # 18<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

				<a class="category1"><img src="styles/img/skybg.jpg"/>
				<span>Food Item # 19<br/>
					Category:<br/>
					Quantity: *database?*<br/>
					Price:
				</span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>

			    <a class="category2"><img src="styles/img/burger.jpg"/>
			    <span>Food Item # 20<br/>
			    	Category:<br/>
					Quantity: *database?*<br/>
			    	Price:
			    </span>
			    <input type="number" name="orderCount" value="0" min="0" max="50"/></a>
			</form>


			<div id="orderList">
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				Qty - Item - Price<br />
				<a href="#" id="backToOrder">BACK</a>
				<a href="#" id="resetOrder">RESET</a>
				<a href="#" id="finalizeOrder">ENLIST</a><br />
			</div>
		</div>

	
		
			
		<div class="footer"> McJOLLY &copy; 2013
</div>
				
	</body>
</html>
