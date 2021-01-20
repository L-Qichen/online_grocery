<?php
$users = simplexml_load_file("userlist.xml");
$countUsers = 0;
$count = $_POST["count"];
$fname = $_POST["fname"];
foreach($users->children() as $user){
    $countUsers++;
}

if(is_numeric($count)){
    foreach($users->children() as $user){
        if($user->count == $count){
            $user->fname = $_POST["fname"];
            $user->lname = $_POST["lname"];
            $user->email = $_POST["email"];
            $user->phone = $_POST["phone"];
            $user->address = $_POST["address"];
        break;
        }
    }
}
else{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];


$newUser = $users->addChild("user");
$newUser->addChild("fname",$fname);
$newUser->addChild("lname",$lname);
$newUser->addChild("email",$email);
$newUser->addChild("phone",$phone);
$newUser->addChild("address",$address);
$newUser->addChild("count",$countUsers+1);
}
$usersData=fopen("userlist.xml","w");
fwrite($usersData,$users->asXML());
fclose($usersData);


header("location:p9userlist.php");

?>