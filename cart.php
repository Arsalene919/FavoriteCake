<?php
$con=new PDO('mysql:host=localhost; dbname=favorite cake','root','');
?>

<!DOCTYPE html>
<html>
<head>
<title>Your Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.shop.js"></script>
</head>

<body>

<div id="site">
	<header id="masthead">
		<h1>Your <span class="tagline">Favorite Cake</h1>
	</header>
	<div id="content">
		<h1>Your Shopping Cart</h1>
		<form id="shopping-cart" action="cart.php" method="post">
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<p id="sub-total">
				<strong>Sub Total</strong>: 100$ 
			</p>
			<ul id="shopping-cart-actions">
				<li>
					<input type="submit" name="update" id="update-cart" class="btn" value="Update Cart" />
				</li>
				<li>
					<input type="submit" name="delete" id="empty-cart" class="btn" value="Empty Cart" />
				</li>
				<li>
					<a href="index1.php" class="btn">Continue Shopping</a>
				</li>
			</ul>
		</form>
	</div>
	
	

</div>

<footer id="site-info">
	Copyright &copy; 2020 Favorite Cake  
	</footer>

</body>
</html>	