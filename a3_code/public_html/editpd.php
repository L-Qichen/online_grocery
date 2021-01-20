<?php
# edit product


if(isset($_GET['index'])){
  #echo "get index from p7";
$index = (int)$_GET['index'];
#echo "$index ";
#$_SESSION["passindex"]= "$index";


$doc = new DOMdocument();
$doc -> formatOutput=true;
$doc ->preserveWhiteSpace=false;
$doc->load('productdata.xml');

$xpath = new DOMXPATH($doc);

$products_info= $xpath->query("//products/*");
$edit_product = $products_info->item($index);
#echo "$edit_product->nodeValue";

$edit_name = $edit_product->getElementsByTagName('name');
$name_value = $edit_name->item(0)->nodeValue;

$edit_price = $edit_product->getElementsByTagName('price');
$price_value = $edit_price->Item(0)->nodeValue;

$edit_qty = $edit_product->getElementsByTagName('inventory');
$qty_value = $edit_qty->Item(0)->nodeValue;

$edit_id = $edit_product->getElementsByTagName('item_number');
$id_value = $edit_id->item(0)->nodeValue;

$edit_img = $edit_product->getElementsByTagName('img');
$img_value=$edit_img->item(0)->nodeValue;
}




?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>p8</title>
    <link rel="stylesheet" type="text/css" href="Add Product.css" />
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

                <h3>Edit product</h3>
            </div>
        </div>


        <div class="table">

            <form action="p7.php" method="post" >

                <label for="title">Title</label><br>
                <input type="text" id="title" name="title" value="<?php echo "$name_value" ?>">

                <label for="price">Price</label><br>
                <input type="text" id="price" name="price" value="<?php echo "$price_value" ?>">
                <label for="quantity ">Quantity </label><br>
                <input type="text" id="quantity" name="quantity" value="<?php echo "$qty_value" ?>">
                <label for="Item Number ">Item Number </label><br>
                <input type="text" id="Item Number" name="itemNumber" value="<?php echo "$id_value" ?>">





                <p>Upload photo:</p>

                <label for="myfile">Select a file:</label>
                <input type="file" id="myfile" name="myfile" >
                <br><br>
                <input type="submit" value="Submit">


                <br>
                <br>
                <label for="description">Description</label><br>

                <textarea class="textara" id="description" name="description" row="100" cols="1003" placeholder=""></textarea><br>
                <input type="hidden" name="getindex" value="<?php echo "$index" ?>">



                    <!--<input class="Discard" type="button" value="Discard">-->




                <input type="submit" name = "edit" value="Edit" >






            </form>
        </div>
    </div>



</body>
</html>
