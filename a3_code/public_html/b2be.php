<?php

session_start();

require_once('./php/CreateDb.php');
require_once('./php/component.php');
$database = new CreateDb("Productdb","Producttb");

if (isset($_POST['add'])){
   
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            
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



<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baverages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link  rel="stylesheet" type="text/css" href="P2Be.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <li><a href="Login.php">Login</a></li>
                            <li><a href="Registration.php">Signup</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="h_bottom">
				<div class="botcon main clearfix">
					<a href="index.php">
						<img class="logo" src="logo.png" alt="logo"/></a>
					<form class="searchbar">
						<input type="text" name="search" placeholder="Search..." />
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
                            <li><a href="b2be.php">Beverages</a></li>
                            <li><a href="P2DairyAndEgg.html">Dairy&Eggs</a></li>
                            <li><a href="p2meat.php">Meat</a></li>
                            <li><a href="p2fish.html">Fish</a></li>
                        </ul>
					</li>
					<li><a href="index.php">Home</a></li>
					
				</ul>
			</div>
		</header>

		<div class="middlecontent">
			<div class="smallhead">Beverages</div>
		<marquee οnmοuseοut="this.start()" οnmοusemοve="this.stop()" align="middle">
			<font color="purple">Welcome to our store</font>
		</marquee>
		<marquee οnmοuseοut="this.start()" οnmοusemοve="this.stop()" scrollamount="10">
			<font color="purple">Enjoy your shopping</font>
		</marquee>
		
		<div class="leftbar">
            <ul>
                <li><a href="fruits.php">Fruits</a></li>
                            <li><a href="p2vegetables.php">Vegetables</a></li>
                            <li><a href="b2be.php">Beverages</a></li>
                            <li><a href="P2DairyAndEgg.html">Dairy&Eggs</a></li>
                            <li><a href="p2meat.php">Meat</a></li>
                            <li><a href="p2fish.html">Fish</a></li>
            </ul>
        </div>
            

			
            <div class="grid-container ">
			<?php
                          component("Coca cola","1.99","Coca-Cola-Zero-330ml-Can.jpg","1","cola.php");
                          component("Sprite", "1.99","Sprite.png","2","sprite.php");
                          component("High-Brew-Espresso","4.99","High-Brew-Espresso.jpg","3","high.php");
                          component("Milk","2.99","milk.jpg","4","milk.php");
                          component("god ridge","1.99","god ridge.jpg","5","god.php");
                          component("Mocha","4.99","Mocha.jpg","6","mocha.php");

                ?>
                <div class="empty"><p></p></div>
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
			
		
				
	
	</body>



		
	
</html>