<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
	</center>
</div>
<h2>Please chose your role:</h2>
<div class="btn-group" style="width:100%">
  <button onclick="document.location='index.php'" style="width:50%;padding: 10px 24px; cursor: pointer; 
  float: left;" >Client</button>
  <button style="width:50%; padding: 10px 24px;  cursor: pointer; 
  float: left;"  onclick="myFunction()">Admin</button>
</div>
<script>
            function myFunction() 
            {
                var testV = 1;
                var pass1 = prompt('Please enter your passward:','');
                while (testV < 3) 
                {
                    if (!pass1)
                    history.go(-1);
                    if (pass1 == "123456") 
                    {
                        alert('Correct!');
window.open("p7.php")
                        break;
                    }
                    testV+=1;
                    var pass1 =
                    prompt('Not Correcct! Please try again:');
                }
                if (pass1!="password" & testV ==3)
                history.go(-1);
                return " ";
            }
            document.write(password());
        </SCRIPT>


  