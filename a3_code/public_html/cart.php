<?php 
session_start();
require_once('./php/CreateDb.php');
require_once('./php/component.php');


$db = new CreateDb();

if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
  }

?>



<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fresh cart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link  rel="stylesheet" type="text/css" href="P4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="box">
		<header class="header">
			<div class="h_top">
				<div class="topcon main clearfix">
					<div class="topleft fl">
						<div class="leftTxt"><a href="homepage.html"">Welcome to fresh!</a></div>
					</div>
					<div class="topright fr">
						<ul class="rightTxt reset">
							<!--<li><a href="p9userlist.html"><i class="material-icons">portrait</i>My Account</a></li>-->
                            <li><a href="cart.php"><i class="material-icons">shopping_cart</i>My Cart</a></li>
                            <li><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="h_bottom">
				<div class="botcon main clearfix">
					<a href="homepage.html">
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
                            <li><a href="P2Be.php">Beverages</a></li>
                            <li><a href="P2DairyAndEgg.html">Dairy&Eggs</a></li>
                            <li><a href="p2meat.php">Meat</a></li>
                            <li><a href="p2fish.html">Fish</a></li>
						</ul>
					</li>
					<li><a href="homepage.html"">Home</a></li>
					
				</ul>
			</div>
		</header>

		<div class="middlecontent">
			<div class="smallhead">Cart Information</div>
		<marquee οnmοuseοut="this.start()" οnmοusemοve="this.stop()" align="middle">
			<font color="purple">Welcome to our store</font>
		</marquee>
		<marquee οnmοuseοut="this.start()" οnmοusemοve="this.stop()" scrollamount="10">
			<font color="purple">Enjoy your shopping</font>
        </marquee>
        

		<div class="grid-container">
            
            
            
            <div class="aaaa">
            <?php


    if (isset($_SESSION['cart'])){
        $product_id = array_column($_SESSION['cart'], 'product_id');

        $result = $db->getData();
        while ($row = mysqli_fetch_assoc($result)){
            foreach ($product_id as $id){
                if ($row['id'] == $id){
                    cartElement( $row['product_image'], $row['product_name'],$row['product_price'],$row['product_web'], $row['id']);
                    
                }
            }
        }
    }else{
        echo "<h5>Cart is Empty</h5>";
    }

?>
    


                                               </div>
		
    
        	
        <div class="right">
            
            <h2>Online grocery</h2>
            <hr class="separator-medium border-mercury margin-medium except-mobile">
            
            <div class="container">
            <h3>Items</h3>
            
            <div class="ttt">
                <span>The total number of items is <span id="totalCount">0</span> items</span>
                
            </div>
                        
                                    <h3>Estimated Total*</h3>
                                    <div class="ttt"> <span> <span id="totalPrice">&#36;0</span></span></div>
                
            <div class="info">
            
                <p><span>*Your order total may vary based on savings, promotions, actual weight of the products and prices in effect at the time of order pickup or delivery.</span>
                </p>
                <p><span>The product availability and prices may vary based on the selected store and service.</span></p>
                <button class="big-button" input type="button" onclick="window.open('homepage.html')">Continue shopping</button>
            </div>
        
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
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    
    $(function(){
        calcTotal();
        $('.left button').on('click', function(evt) {
            $(this).parent().parent().find('input[name="selectOne"]').prop('checked', true);
            if ($(this).text() == '-') {
                var count = parseInt($(this).next().val());
                if (count > 1) {
                    count -= 1;
                    $(this).next().val(count);
                } else {
                    alert('Minmum number is 1');
                }
            } else {
                var count = parseInt($(this).prev().val());
                if (count < 200) {
                    count += 1;
                    $(this).prev().val(count);
                } 
            }
            var price = parseFloat($(this).parent().prev().find('span').text());
            $(this).parent().next().html('&#36;' + (price * count).toFixed(2));
            calcTotal();
            

     


        });
        $('.left a').on('click', function() {
            if (window.confirm('Are you sure to delete?')) {
                $(this).parent().parent().remove();
                calcTotal();
            }
        });
        function calcTotal() {
            var checkBoxes = $('input[name="selectOne"]');
            var priceSpans = $('.left .price');
            var countInputs = $('.left .count');
            var totalCount = 0;
            var totalPrice = 0;
            for (var i = 0; i < priceSpans.length; i += 1) {
               
                
                    
                    var price = parseFloat($(priceSpans[i]).text());
                    var count = parseInt($(countInputs[i]).val());
                    totalCount += count;
                    totalPrice += price * count;


        
                
            }
            $('#totalCount').text(totalCount);
            $('#totalPrice').html('&#36;' + totalPrice.toFixed(2));

           
        }
        
            window.onbeforeunload = function(e){
                e.returnValue=("Press canale to change the items");
            }
       
        

    })
    
</script>









	</body>
</html>