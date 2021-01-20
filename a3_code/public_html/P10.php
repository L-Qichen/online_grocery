<!--
P10-vegetable
Liu Qichen
40055916
-->
<?php
if(isset($_GET["fn"])){
$users = simplexml_load_file("userlist.xml");
$firstName = $_POST["fn"];
foreach($users->children() as $user){
    if($user->fname==$firstName){
        $fname = $user->fname;
        $lname = $user->lname;
        $email = $user->email;
        $phone = $user->phone;
        $address = $user->address;
        $count = $user->count;
        $admin = $user->admin;
    break;
    }
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <title>Add/Edit user</title>
  <link rel="stylesheet" type="text/css" href="p10and12.css">
</head>


<body>
  <div class=" left-nav">
    <ul class="nav-list">
      <li><a href="homepage.html">Home</a></li>
      <li><a href="P11.php">Orders</a></li>
      <li><a href="p9userlist.php">User list</a></li>
      <li><a href="p7.php">Product list</a></li>
    </ul>
  </div>

  <div class="header">
    <h3 class="title">Add/Edit User Profile</h3>
  </div>

  <div class="box">
    <p>Please enter the user information:</p>
    <form action="addUser.php" method="post" class="information">
      <label for="fname">*First Name:</label><br>
      <input type="text" id="fname" name="fname" required <?php if((isset($_GET["fn"]))) echo("value=\"$fname\"")?>><br>
      <label for="lname">*Last Name:</label><br>
      <input type="text" id="lname" name="lname" required <?php if((isset($_GET["fn"]))) echo("value=\"$lname\"")?>><br>
      <label for="email">*E-mail:</label><br>
      <input type="email" id="email" name="email" placeholder="example@abc.com" required <?php if((isset($_GET["fn"]))) echo("value=\"$email\"")?>><br>
      <label for="phone">*Phone Number:</label><br>
      <input type="tel" id="phone" name="phone" placeholder="1234567890" pattern="[0-9]{10}" title="ten digits" required <?php if((isset($_GET["fn"]))) echo("value=\"$phone\"")?>><br>
      <label for="address">Address:</label><br>
      <input type="text" id="address" name="address" required <?php if((isset($_GET["fn"]))) echo("value=\"$address\"")?>><br>
      <label for="count">User Number:</label><br>
      <input type="number" id="count" name="count" readonly="readonly" <?php if((isset($_GET["fn"]))) echo("value=\"$count\"")?>><br>
      <br><br>
      <input type="submit" value="save" class="save-button">
    </form>
  </div>
</body>
</html>
