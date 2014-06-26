<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gg</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>	

	<header>
		<div id='headerContainer' class="container">
			<div class="navLeft">
				<ul>
					<li><a href='category.php?id=1'>Couriers</a></li>
					<li><a href='category.php?id=2'>Arcana</a></li>
				</ul>
			</div>

			<a href='index.php'><img class='navImg' src="assets/img/dota2.png" alt="#" ></a>
			
			<div class="navRight">
				<ul>
					<li><a href="category.php?id=3">Immortal</a></li>
					<li><a href='category.php?id=4'>Legendary</a></li>
				</ul>
			</div>
		
			<a href='login.php'><div class="login">
				<span>Login</span>
			</div></a>
			<div class="cart">
				<a href="cart.php">Cart (<?=Cart::get_total()?>)</a>
			</div>
		</div>
	</header>

	<div class="container">

	<div class="background">
