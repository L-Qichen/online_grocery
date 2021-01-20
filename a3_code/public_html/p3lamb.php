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
            echo "<script>window.location = 'p3lamb.php'</script>";
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
    <title>Lamb</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="P3Be.css">
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
                            <!--<li><a href="p9userlist.html"><i class="material-icons">portrait</i>My Account</a></li>-->
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
                        <img class="logo" src="logo.png" alt="logo" />
                    </a>
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
        <div class="procedure main clearfix">
            <a href="index.php"><span>/ Home </span> </a>
            <a href="p2meat.php"><span>/ Meat </span></a>
        </div>
        <div class="middlecontent clearfix">

		<marquee οnmοuseοut="this.start()" οnmοusemοve="this.stop()" align="middle">
			<font color="purple">Welcome to our store</font>
		</marquee>
		<marquee οnmοuseοut="this.start()" οnmοusemοve="this.stop()" scrollamount="10">
			<font color="purple">Enjoy your shopping</font>
        </marquee>


        <?php

                colaElement ("lambb.png", "Lamb", "38", "9");
        ?>





                    <script>
                        function Falue() {
                            var total = parseInt(qnt_1.value) * 38;
                            document.getElementById("ItemsTotal").innerHTML = total;
                            var n = parseInt(document.getElementById("qnt_1").value);
                            localStorage.setItem("a",n);
                            localStorage.setItem("t",total);
                        }

                    </script>

                    <script type="text/javascript">

                        keep();
                        function keep() {

                            document.getElementById("qnt_1").value= localStorage.getItem("a");
                            document.getElementById("ItemsTotal").innerHTML = localStorage.getItem("t");
                        }

                     </script>



                    <script>
                    var status = "less";

function myFunction()
{
    var text="Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company.";

    if (status == "less") {
        document.getElementById("textArea").innerHTML=text;
        document.getElementById("one").value = "Show Less";
        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea").innerHTML = "";
        document.getElementById("one").value = "Show More";
        status = "less"
    }
}</script>



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
