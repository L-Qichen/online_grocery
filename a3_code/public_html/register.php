<?php
if(isset($_POST['regist'])){
  echo "get regist info";
  $xml = new DOMDocument();
  $xml->load('ul.xml');

  $input_name = $_POST["username"];
  $input_password = $_POST['password'];
  $user_type = $_POST['userType'];


  $rootTag = $xml->getElementsByTagName("userlist")->item(0);

  $userTag=$xml->createElement("user");

  $fnameTag=$xml->createElement("fname",$input_name);

  $passwordTag=$xml->createElement("pw",$input_password);

  $typeTag=$xml->createElement("type",$user_type);

  $userTag->appendChild($fnameTag);
  $userTag->appendChild($passwordTag);
  $userTag->appendChild($typeTag);


  $rootTag->appendChild($userTag);
  $xml->save('ul.xml');
}


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="Author" content="Peng"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Fresh register!</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
    <div id="header">
        <div class="container">
            <div class="header_left fleft">
                <div class="tel"> Welcome to fresh!</div>
            </div>
            <ul class="fright">
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign up</a></li>
                <li><a href="index.php">Home</a></li>
                <li class="sc"><span></span><a href="cart.php">Shop cart</a></li>
            <ul>
        </div>
    </div>
    <div class="logo">
        <a href="index.php"><img src="img/headerback2.jpg"></a>
    </div>
    <div id="main">
    <div class="border1">

  <form method="POST" action=" ">
      <div class="inf"><h1>Creat Account</h1><br>
          <label>User name</label><br>
          <input type="text" name="username" class="code animated flash"></input><br>
          <label>Password</label><br>
          <input type="password" name="password" class="code animated flash"></input><br>


          <label>User Type</label><br /><br />
           <div class="usertype">
                <select name="userType" class="userType">
                   <option value="admin">admin</option>
                   <option value="client">client</option>
                </select>
           </div>
      </div>


      <div class=but>

          <input type="submit" name="regist"value="Register now!" class="now-register animated flash">
          <br>
          <br>
      </div>
  <form>

<?php
if(isset($_POST['regist']) && isset($_POST['username']) && isset($_POST['password'])){
  echo "<h3>Regist sucessful,Thank you!<h3>";
}

?>
    </div>
    </div>
    <div id="footer" class="animated fadeIn">
        <p>©2020-2030 Fresh store! SOEN287 Project</p>
    </div>
</body>
</html>
