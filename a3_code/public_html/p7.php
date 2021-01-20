


<?php
#add element to xml file

if (isset($_POST['insert']))
{

	$xml = new DOMDocument();
	$xml->load('productdata.xml');

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
	$xml->save('productdata.xml');

}

?>

<?php

#edit element
if(isset($_POST['edit'])){

        #echo "get index from editpd";
        $index =$_POST['getindex'];
				#echo "index from edit page is $index";
        #$index = (int)$_POST['index'];

        #echo "index of edit book is: $index";
        $doc = new DOMdocument();
        $doc -> formatOutput=true;
        $doc ->preserveWhiteSpace=false;
        $doc->load('productdata.xml');

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

        /*$name_value = $new_name;
        $price_value = $new_price;
        $qty_value = $new_qty;
        $id_value = $new_id;*/

        $doc->save('productdata.xml');
        #header('location:p7.php');
}
?>



<?php
# remove element in xml file


 if(isset($_GET['index1'])){
#echo "back from delete page";
     $index =(int)$_GET['index1'];
#echo "$index";

    $xmlDoc =new DOMDocument();
    #$xmlDoc->formatOutput = ture;
    $xmlDoc->preserveWhiteSpace=false;
    $xmlDoc->load('productdata.xml');

    $xpath = new DOMXPATH($xmlDoc);


        $productNode=$xpath->query("//products/*");
        #echo "$productNode->length";
        $delNode = $productNode->item($index);
        $delNode->parentNode->removeChild($delNode);

    $xmlDoc->save('productdata.xml');
     #header('location:p7.php');
    }
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>p7</title>
    <link rel="stylesheet" type="text/css" href="p7style.css" />
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
                <h3>Product list</h3>

                <?php
                /*<div class="category">
                    <!--<input id="gettype" list="category" name="category" onchange="" />-->
                    <select name="category" id="category">
                        <option value="Fruits">Fruits</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Meat"selected>Meat</option>
                        <option value="Baverage">Baverage</option>
                        <option value="Dairy&Eggs">Dairy&Eggs</option>
                        <option value="Fish">Fish</option>
                    </select>
                    <input id="submitcate" type="submit" value="submit" />
                </div>*/
               ?>

                 <a href="Add_Product.html"><input class="add" type="button" value="+ Add product" /></a>
            </div>
            <!--<div class="filtersection"></div>-->
            <form action="p7.php" method="post">
                <table>
                    <tr class="title">


                        <th>Product image</th>
                        <th>Product name</th>
                        <th>Item number</th>
                        <th>Price</th>
                        <th>Inventory/Qty</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    # display xml in php as table
                    $doc = new DOMDocument();
                    $doc->load('productdata.xml');
                    $xpath = new DOMXpath($doc);
                    $prod = $xpath->query("/products/*");

                    #echo  "$prod->length";
                    #foreach($products->children() as $meat)
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
                                <input type=\"button\" value=\"edit\" onclick=\"location.href='editpd.php?index=$i'\">
                                <input class=\"delete\" type=\"button\" value=\"delete\" name=\"delete\" onclick=\"  location.href='p7.php?index1= $i' \" >
                            </td>";
                        /*echo "<td> <img src='$meat->img'> </td>";



                        echo " <td>$meat->item_number</td>";

                        echo " <td>$meat->price</td>";

                        echo "<td>$meat->inventory</td>";

                        echo "<td class=\"action\">
                               $meat->act
                            <input class=\"delete\" type=\"button\" name=\"delete\" value=\"delete\" />
                            <input class=\"edit\" type=\"button\" value=\"edit\" />
                        </td>";*/
                        echo "</tr>";


                    }

                    ?>
                    <!--<tr>
            <td><input type="checkbox" name="meat" value="pork" /></td>
            <td class="image"><img id="img" src="pork.png" alt="pork" /></td>
            <td id="name">Pork chops</td>
            <td id="number">00001</td>
            <td id="price">$7.11</td>
            <td id="inventory">5</td>
            <td class="action">
                <input class="delete" type="button" value="delete" onclick="del(this)" />
                <a href="Add Product.html"><input type="button" value="edit" /></a>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="meat" value="beef" /></td>
            <td class="image"><img id="img" src="beef.png" alt="beef" /></td>
            <td id="name">European Beef</td>
            <td id="number">00002</td>
            <td>$5.23/250g</td>
            <td>3</td>
            <td class="action">
                <input class="delete" type="button" value="delete" onclick="del(this)" />
                <a href="Add Product.html"><input type="button" value="edit" /></a>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="meat" value="lamb" /></td>
            <td class="image"><img src="lamb.png" alt="lamb" /></td>
            <td>NewZeland lamb leg</td>
            <td>00003</td>
            <td>$41.68</td>
            <td>10</td>
            <td class="action">
                <input class="delete" type="button" value="delete"onclick="del(this)" />
                <a href="Add Product.html"><input type="button" value="edit" /></a>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="meat" value="chickenbreast" /></td>
            <td class="image"><img src="chickenbreast.png" alt="chickenbreast" /></td>
            <td>Chicken breasts</td>
            <td>00004</td>
            <td>$17.61</td>
            <td>8</td>
            <td class="action">
                <input class="delete" type="button" value="delete" onclick="del(this)"/>
                <a href="Add Product.html"><input type="button" value="edit" /></a>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="meat" value="chickenDrumsticks" /></td>
            <td class="image"><img src="chickenDrumsticks.png" alt="chickendrumsticks" /></td>
            <td>Chicken drumsticks</td>
            <td>00005</td>
            <td>$10.56</td>
            <td>30</td>
            <td class="action">
                <input class="delete" type="button" value="delete" onclick="del(this)" />
                <a href="Add Product.html"><input type="button" value="edit" /></a>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="meat" value="duck" /></td>
            <td class="image"><img src="duck.png" alt="duck" /></td>
            <td>Fresh duck leg</td>
            <td>00006</td>
            <td>$5.73 avg.ea.</td>
            <td>3</td>
            <td class="action">
                <input class="delete" type="button" value="delete" onclick="del(this)" />
                <a href="Add Product.html"><input type="button" value="edit" /></a>
            </td>
        </tr>-->
                </table>
            </form>
        </div>

    </div>

    <!--<script src="js/p7.js"> </script>-->
</body>
</html>
