<html>

<body>

<?php
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
</body>
</html>


