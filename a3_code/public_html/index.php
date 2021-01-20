<?php

session_start();

require_once('./php/CreateDb.php');
require_once('./php/component.php');
$database = new CreateDb("Productdb","Producttb");
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fresh</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link  rel="stylesheet" type="text/css" href="homestyle.css">
	<style>

	

	</style>
</head>
<body>
	<div id="box">
		<header class="header">
			<div class="h_top">
				<div class="topcon main clearfix">
					<div class="topleft fl">
						<div class="leftTxt"><a href="index.php">Welcome to fresh!</a></div>
					</div>
					<div class="topright fr">
						<ul class="rightTxt reset">
							
							<li><a href="cart.php"><i class="material-icons">shopping_cart</i>My Cart</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Signup</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="h_bottom">
				<div class="botcon main clearfix">
                    
						<a href="index.php">
						<img class="logo" src="logo.png" alt="logo"/></a>
					
					
					<form class="searchbar">
						<input type="text" name="search" placeholder=" Search..." />
					</form>
				</div>
			</div>
			<div class="menu main clearfix">
				<ul class="nav reset">
					<li class="first">
						<a href="#">Aisles</a>
						<ul class="dropdown reset">
							<li><a href="fruits.php">Fruits</a></li>
							<li><a href="p2vegetables.php">Vegetables</a></li>
							<li><a href="b2be.php">Baverages</a></li>
							<li><a href="P2DairyAndEgg.html">Dairy&Eggs</a></li>
							<li><a href="p2meat.php">Meat</a></li>
							<li><a href="p2fish.html">Fish</a></li>
						</ul>
					</li>
					<li><a href="index.php">Home</a></li>
					
				</ul>
			</div>
		</header>

		<div class="middlecontent main">
			<div class="middletop">
                <h3><span>Choose your food on the table</span></h3>
                
				<map name="imagemap">
					<area shape="circle" coords="200,160,90" href="P3-Lettuce.html" alt="salad"></area>
					<area shape="circle" coords="90,280,80" href="Golden Honeydew.html" alt="panapple"></area>
					<area shape="circle" coords="110,480,60" href="Local Strawberry Basket.html" alt="blueberry"></area>
					<area shape="circle" coords="340,400,120" href="P3-Corn.html" alt="corn"></area>
					<area shape="circle" coords="650,370,140" href="p3chickenbreast.html" alt="chicken"></area>
					<area shape="circle" coords="590,160,60" href="P3Milk.html" alt="milk"></area>
					<area shape="circle" coords="720,100,50" href="P3Sprite.html" alt="juice"></area>
					<area shape="circle" coords="825,120,50" href="Large Lemons.html" alt="lemon"></area>
					<area shape="circle" coords="1000,260,130" href="Golden Honeydew.html" alt="watermelon"></area>
				</map>
				<img src="foodontable.png" usemap="#imagemap" />
			</div>
			<div class="middlebot">
				<div class="firstrow clearfix">
					<div class="fruit"><a href="fruits.php">FRUITS</a></div>
					<div class="vegetable"><a href="p2vegetables.php">VEGETABLES</a></div>
					<div class="meat"><a href="p2meat.php">MEAT</a></div>
				</div>
				<div class="secondrow">
					<div class="baverage"><a href="b2be.php">BEVERAGE</a></div>
					<div class="dairy"><a href="P2DairyAndEgg.html">DAIRY&EGGS</a></div>
					<div class="fish"><a href="p2fish.html">FISH</a></div>
				</div>
			</div>
		</div>




		<footer class="footer">
			<div class="foottop"></div>
			<div class="developer main">
				<p>PENG ZHAO</p>
				<p>QICHEN LIU</p>
				<p>MINGYU GAO</p>
				<p>FUQIANG ZHAI</p>
				<p>FANGZHENG LIU</p>
				<p>JOSE LEOPARDI</p>
			</div>
		</footer>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="jquery.rwdImageMaps.min.js "></script>
	<script>
		$(document).ready(function (e) {
			$('img[usemap]').rwdImageMaps();
		});
	</script>

</body>
</html>
