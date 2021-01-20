<?php  session_start();?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>

  <style >
  /*for mobile*/
  @media only screen and (max-width: 800px) {

      .reset {
          margin: 0px;
          padding: 0px;
      }

      .main {
          width: 100%;
          margin: 0 auto;
      }

      .clearfix::after {
          display: block;
          content: " ";
          clear: both;
      }

      .fl {
          float: left;
      }

      .fr {
          float: right;
      }

      .header {
          width: 100%;
          height: 200px;
          background-image: url(headerback2.jpg);
          background-size: 100% 100%;
      }

      .h_top {
          width: 100%;
          height: 40px;
          background-color: #000000;
      }

      .leftTxt {
          line-height: 40px;
      }



          .leftTxt a {
              text-decoration: none;
              color: white;
              font-size: 10px;
              float: left;
              margin-left: 5px;
          }

      .rightTxt {
          line-height: 40px;
      }


          .rightTxt li {
              list-style-type: none;
              display: inline-block;
              margin-right: 5px;
          }

              .rightTxt li a {
                  text-decoration: none;
                  color: white;
                  font-size: 10px;
              }


                  .rightTxt li a:hover {
                      color: yellow;
                  }

      .material-icons {
          margin-right: 3px;
          font-size: 10px;
      }

      .botcon {
          height: 120px;
      }


      img.logo {
          display: block;
          width: 50px;
          height: 50px;
          float: left;
          margin-left: 15%;
          padding: 35px 0;
      }

      .searchbar {
          float: left;
          margin-left: 10%;
          line-height: 120px;
      }

      input[type=text] {
          width: 100%;
          height: 20px;
          font-size: 10px;
          border: 1px solid black;
          border-radius: 5px;
      }

      .menu {
          height: 40px;
      }

      .nav li {
          list-style: none;
          float: left;
          line-height: 40px;
          width: 100px;
          height: 40px;
          text-align: center;
          font-size: 15px;
          font-weight: bold;
      }

          .nav li.first {
              margin-left: 50px;
          }

          .nav li a {
              text-decoration: none;
              color: black;
              display: block;
          }

              .nav li a:hover {
                  color: yellow;
              }

          .nav li ul.dropdown {
              position: relative;
              z-index: 1;
          }

              .nav li ul.dropdown li {
                  display: none;
              }

          .nav li:hover .dropdown li {
              display: block;

              background-image: url(dropdownback.png);
          }

          .middlecontent{
                text-align: center;
            }



  }


  /*for tablet*/
  @media only screen and (min-width: 800px) and (max-width:1024px) {
      * {
          box-sizing: border-box;
      }

      .reset {
          margin: 0px;
          padding: 0px;
      }

      .main {
          width: 1024px;
          margin: 0 auto;
      }

      .clearfix::after {
          display: block;
          content: " ";
          clear: both;
      }

      .fl {
          float: left;
      }

      .fr {
          float: right;
      }

      .header {
          width: 100%;
          height: 200px;
          background-image: url(headerback2.jpg);
          background-size: cover;
      }

      .h_top {
          width: 100%;
          height: 40px;
          background-color: #000000;
      }

      .topcon {
          height: 40px;
          background-color: #000000;
          clear: both;
      }

      .topleft {
          width: 300px;
          height: 40px;
      }



      .leftTxt {
          line-height: 40px;
          margin-left: 30px;
      }

          .leftTxt a {
              text-decoration: none;
              color: white;
              font-size: 20px;
          }

      .topright {
          width: auto;
          height: 40px;
      }

      .rightTxt {
          line-height: 40px;
      }


          .rightTxt li {
              list-style-type: none;
              display: inline-block;
              margin-right: 20px;
          }

              .rightTxt li a {
                  text-decoration: none;
                  color: white;
                  font-size: 20px;
              }

                  .rightTxt li a:hover {
                      color: yellow;
                  }

      .material-icons {
          margin-right: 8px;
          font-size: 18px;
      }

      .botcon {
          height: 120px;
      }


      img.logo {
          display: block;
          width: 80px;
          height: 80px;
          float: left;
          margin: 20px;
          margin-left: 25%;
      }



      .searchbar {
          float: left;
          margin-left: 8%;
          line-height: 120px;
      }

      input[type=text] {
          width: 100%;
          height: 30px;
          font-size: 20px;
          border: 2px solid black;
          border-radius: 6px;
      }


      .menu {
          height: 40px;
      }



      .nav li {
          list-style: none;
          float: left;
          line-height: 40px;
          width: 200px;
          height: 40px;
          text-align: center;
          font-size: 20px;
          font-weight: bold;
      }

          .nav li.first {
              margin-left: 150px;
          }





          .nav li a {
              text-decoration: none;
              color: black;
              display: block;
          }

              .nav li a:hover {
                  color: yellow;
              }

          .nav li ul.dropdown {
              position: relative;
              z-index: 1;
          }

              .nav li ul.dropdown li {
                  display: none;
              }

          .nav li:hover .dropdown li {
              display: block;
              background-image: url(dropdownback.png);
          }
          .middlecontent{
                text-align: center;
            }

  }



  /*for desktop*/
  @media only screen and (min-width: 1024px){
      * {
          box-sizing: border-box;
      }

      .reset {
          margin: 0px;
          padding: 0px;
      }

      .main {
          width: 1024px;
          margin: 0 auto;
      }

      .clearfix::after {
          display: block;
          content: " ";
          clear: both;
      }

      .fl {
          float: left;
      }

      .fr {
          float: right;
      }

      .header {
          width: 100%;
          height: 200px;

          background-image:url(headerback2.jpg);
          background-size:cover;
      }

      .h_top {
          width: 100%;
          height: 40px;
          background-color: #000000;
      }

      .topcon {
          height: 40px;
          background-color: #000000;
          clear: both;
      }

      .topleft {
          width: 300px;
          height: 40px;
      }



      .leftTxt {
          line-height: 40px;
          margin-left: 30px;
      }

          .leftTxt a {
              text-decoration: none;
              color: white;
              font-size: 20px;
          }

      .topright {
          width: auto;
          height: 40px;
      }

      .rightTxt {
          line-height: 40px;
      }


          .rightTxt li {
              list-style-type: none;
              display: inline-block;
              margin-right: 20px;
          }

              .rightTxt li a {
                  text-decoration: none;
                  color: white;
                  font-size: 20px;
              }

                  .rightTxt li a:hover {
                      color: yellow;
                  }

      .material-icons {
          margin-right: 8px;
          font-size: 18px;
      }

      .botcon {
          height: 120px;

      }


      img.logo {
          display: block;
          width: 80px;
          height: 80px;
          float: left;

          margin:20px;
          margin-left:25%;
      }



      .searchbar {
          float: left;
          margin-left: 8%;
          line-height: 120px;
      }

      input[type=text] {
          width: 100%;
          height: 30px;
          font-size: 20px;
          border: 2px solid black;
          border-radius: 6px;
      }


      .menu {
          height: 40px;
      }



      .nav li {
          list-style: none;
          float: left;
          line-height: 40px;
          width: 200px;
          height: 40px;
          text-align: center;
          font-size: 20px;
          font-weight: bold;
      }

          .nav li.first {
              margin-left: 150px;
          }





          .nav li a {
              text-decoration: none;
              color: black;
              display: block;
          }

              .nav li a:hover {
                  color: yellow;
              }

          .nav li ul.dropdown {
              position: relative;
              z-index: 1;
          }

              .nav li ul.dropdown li {
                  display: none;
              }

          .nav li:hover .dropdown li {
              display: block;
              background-image: url(dropdownback.png);

          }
          .middlecontent{
                text-align: center;
            }

  }



  </style>
  </head>

  <body>
    <header class="header">
      <div class="h_top">
        <div class="topcon main clearfix">
          <div class="topleft fl">
            <div class="leftTxt"><a href="homepage.html">Welcome to fresh!</a></div>
          </div>
          <div class="topright fr">
            <ul class="rightTxt reset">
              <!--<li><a href="p7.html"><i class="material-icons">portrait</i>My Account</a></li>-->
              <li><a href="cart.php">MyCart</a></li>
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

    <middle>
      <div class="middlecontent main">

        <h1>Welcome:<?php echo $_COOKIE['username'];?></h1>
        <hr align=center width=300 color=#987cb9 SIZE=1>
        <p>Your password: <?php echo $_SESSION['password'];?><p>
        <p>Your user type is: <?php echo $_SESSION['usertype'];?><p>


          <?php
            if  ($_SESSION['usertype'] == "admin"){
              echo " <a href='p7.php'
              style='text-decoration: none;
               border:1px solid #aaa;
               background-color:lightgray;
               padding:3px;
               '>
                          Backstore page
                    </a>";
            }
           ?>
      </div>

    </middle>





  </body>
</html>
