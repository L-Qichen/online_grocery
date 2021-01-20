<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>p9userlist</title>
    <link rel="stylesheet" type="text/css" href="p9style.css" />
</head>
<body>

    <div class="container clearfix">


        <div class="leftbar">

            <ul>
                <li><a href="homepage.html">Home</a></li>

                <li><a href="P11.php">Orders</a></li>
                <li><a href="p9userlist.php">User list</a></li>
                <li class="productlist">
                    <a href="p7.php">Product list</a>

                </li>
            </ul>

        </div>
        <div class="rightarea">
            <div class="functions clearfix">
                <h3>User list</h3>
            


                <a href="P10.php"><input class="add" type="button" value="+ Add User" /></a>
            </div>
            <!--<div class="filtersection"></div>-->
            <form action="P10.php" method="post">
                <table>
                    <tr class="title">
                        <th></th>

                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $users = simplexml_load_file("userlist.xml");
                        foreach($users->children() as $user){
                            echo "<tr>";
                            echo "<td><input type=\"checkbox\" name=\"fn\" value=\"$user->fname\" /></td>";
                            echo "<td>$user->fname</td>";
                            echo "<td>$user->lname</td>";
                            echo "<td>$user->email</td>";
                            echo "<td>$user->phone</td>";
                            echo "<td>$user->address</td>";
                            echo "<td class=\"action\">
                                <input class=\"delete\" type=\"submit\" id=\"delete\" formaction=\"deleteUser.php\" value=\"delete\" name=\"delete\" onclick=\"return checkBox()\"/>
                                <input type=\"submit\" id=\"edit\" value=\"edit\" name=\"edit\" onclick=\"return checkBox()\"/>
                                </td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </form>
        </div>

    </div>

    <script>
        function checkBox(){
            var a = document.getElementsByName("fn");
            var checkNum = 0;
            for(var i=0;i<a.length;i++){
                if(a[i].checked){
                    checkNum++;
                }
            }
            if(checkNum!=1){
                alert("Please choose a user first!(choose ONLY one user a time)");
                    return false;
            }
        }


    </script>
</body>
</html>