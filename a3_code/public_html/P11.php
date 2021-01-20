<?php
#add element to xml file

if (isset($_POST['insert']))
{

	$xml = new DOMDocument();
	$xml->load('orderdata.xml');

	$picture = $_POST["myfile"];
	$t = $_POST['title'];
	$pr = $_POST['price'];
	$qty = $_POST['quantity'];
	$number=$_POST['itemNumber'];

	$productsTag = $xml->getElementsByTagName("products")->item(0);

	$meatTag=$xml->createElement("meat");

	$imgTag=$xml->createElement("img",$picture);
	$nameTag=$xml->createElement("name",$t);
	$priceTag=$xml->createElement("price",$pr);
	$itemNumTag=$xml->createElement("item_number",$number);
	$qtyTag=$xml->createElement("inventory",$qty);

	$meatTag->appendChild($imgTag);
	$meatTag->appendChild($nameTag);
	$meatTag->appendChild($priceTag);
	$meatTag->appendChild($itemNumTag);
	$meatTag->appendChild($qtyTag);

	$productsTag->appendChild($meatTag);
	$xml->save('orderdata.xml');

}

?>

<?php

#edit element
if(isset($_POST['edit'])){


        $index = $_POST['getindex'];

        $doc = new DOMdocument();
        $doc -> formatOutput=true;
        $doc ->preserveWhiteSpace=false;
        $doc->load('orderdata.xml');

        $xpath = new DOMXPATH($doc);

        $products_info= $xpath->query("//products/*");
        # old product info
        $old_product = $products_info->item($index);

        $new_product = $doc->createElement('meat');

        $new_img_value=$_POST['myfile'];
        $new_name_value=$_POST['title'];
        $new_price_value=$_POST['price'];
        $new_qty_value=$_POST['quantity'];
        $new_id_value=$_POST['itemNumber'];

        $new_img=$doc->createElement('img',$new_img_value);
        $new_name=$doc->createElement('name',$new_name_value);
        $new_price=$doc->createElement('price',$new_price_value);
        $new_qty=$doc->createElement('inventory',$new_qty_value);
        $new_id=$doc->createElement('item_number',$new_id_value);

        $new_product->appendChild($new_img);
        $new_product->appendChild($new_name);
        $new_product->appendChild($new_price);
        $new_product->appendChild($new_qty);
        $new_product->appendChild($new_id);

        $old_product->parentNode->replaceChild($new_product,$old_product);



        $doc->save('orderdata.xml');
        #header('location:P11.php');
}
?>




<?php
# remove element in xml file


 if(isset($_GET['index1'])){

     $index =(int)$_GET['index1'];


    $xmlDoc =new DOMDocument();
    #$xmlDoc->formatOutput = ture;
    $xmlDoc->preserveWhiteSpace=false;
    $xmlDoc->load('orderdata.xml');

    $xpath = new DOMXPATH($xmlDoc);


        $productNode=$xpath->query("//products/*");
        #echo "$productNode->length";
        $delNode = $productNode->item($index);
        $delNode->parentNode->removeChild($delNode);

    $xmlDoc->save('orderdata.xml');
     #header('location:P11.php');
    }
?>







<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>order list</title>
    <link rel="stylesheet" type="text/css" href="P11.css" />
</head>
<body>

    <div class="container clearfix">


        <div class="leftbar">

            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="P11.php">Orders</a></li>
                <li><a href="p9userlist.php">User list</a></li>
                <li class="productlist">
                    <a href="p7.php">Product list</a>

                </li>
            </ul>

        </div>
        <div class="rightarea">
            <div class="functions clearfix">
                <h3>Order list</h3>



                <input class="add" type="button" value="+ Add product" onclick="location.href='p12addOrder.html'" />
            </div>

            <table>
                <tr class="title">


                    <th>Product image</th>
                    <th>Product name</th>
                    <th>Item number</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>

                <?php
                    # display xml in php as table
                    $doc = new DOMDocument();
                    $doc->load('orderdata.xml');
                    $xpath = new DOMXpath($doc);
                    $prod = $xpath->query("/products/*");


                    for($i=0; $i < $prod->length; $i++)
                    {
                    $product=$prod->item($i);
                    $product_img = $product->getElementsByTagName('img');
                    $product_name = $product->getElementsByTagName('name');
                    $product_id = $product->getElementsByTagName('item_number');
                    $product_price = $product->getElementsByTagName('price');
                    $product_qty = $product->getElementsByTagName('inventory');

                    $product_im= $product_img->item(0)->nodeValue;
                    $product_n= $product_name->item(0)->nodeValue;
                     $product_i= $product_id->item(0)->nodeValue;
                      $product_pr= $product_price->item(0)->nodeValue;
                       $product_quantity= $product_qty->item(0)->nodeValue;


                    echo "<tr>";

                      echo "<td> <img src = '$product_im'</td>";
                      echo  "<td> $product_n </td>";
                      echo  "<td> $product_i </td>";
                      echo  "<td> $product_pr </td>";
                      echo  "<td> $product_quantity </td>";
                      echo  "<td class=\"action\">
                                <input type=\"button\" value=\"edit\" onclick=\"location.href='editOrder.php?index=$i'\">
                                <input class=\"delete\" type=\"button\" value=\"delete\" name=\"delete\" onclick=\"  location.href='P11.php?index1= $i' \" >
                            </td>";
                   echo "</tr>";


                    }

                    ?>
            </table>
        </div>

    </div>
</body>
</html>
