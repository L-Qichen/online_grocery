<?php

$index =(int)$_GET['index'];
    echo "$index";

 if(isset($_GET['index'])){
 echo "it works";
     
  
    
    $xmlDoc =new DOMDocument();
    #$xmlDoc->formatOutput = ture;
    #$xmlDoc->preserveWhiteSpace=false;
        $xmlDoc->load('productdata.xml');

        $xpath = new DOMXPATH($xmlDoc);

      
        $productNode=$xpath->query("/products/*");
        echo "$productNode->length";
        $delNode = $productNode->item($index);
        $delNode->parentNode->removeChild($delNode);
        
    $xmlDoc->save('productdata.xml');
    }

    ?>