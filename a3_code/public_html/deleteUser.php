<?php
$users = simplexml_load_file("userlist.xml");
$firstName = $_POST["fn"];
foreach($users->children() as $user){
    if($user->fname==$firstName){
        unset($user[0]);
    break;
    }
}

$usersData=fopen("userlist.xml","w");
fwrite($usersData,$users->asXML());
fclose($usersData);

header("location:p9userlist.php");
?>