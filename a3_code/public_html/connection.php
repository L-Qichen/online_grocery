<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","id14584032_yuzhu","Iy6\[Ig4K>KHY]Y%","tbuser");

if(!$conn)
{
	echo "Database connection faild...";
}
?>