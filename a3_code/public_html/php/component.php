<?php
function component ($productname, $productprice, $productpic, $productid, $productweb) {
    $element = "
    <form action=\"index.php\" method=\"post\">
    <div class=\"r1c1\">
                    <a class=\"img\" href=\"$productweb\"><img src=\"$productpic\" /></a>
                    <p>$productname</p>
                    <hr />
                    <p>$productprice</p>
                    <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
                </div>
                </form>
    ";
    echo $element;
   
}
function cartElement($productimg, $productname, $productprice, $productweb, $productid) {
    $element = "
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    <div class=\"left\">
                <div>
                    <img src=\"$productimg\" alt = \"Coca-Cola\" />
                </div>
    <div>
        $productname
    </div>
    <div class=\"left w120 center\"> &#36;<span class=\"price\">$productprice</span></div>
    <div class=\"butJia\">
        <button class=\"small-button\">-</button>
        <input class=\"center count\" id=\"a1\" type=\"text\" size=\"2\" value=\"1\">
        <button class=\"small-button\">+</button>
    </div>
    <div class=\"left w120 center\">&#36;<span id=\"a2\" >1.99</span></div>
    <div class=\"left w120 center\">
        
        <button type=\"submit\" class=\"btn mx-1\" name=\"remove\" >Remove</button>
    </div>
            </div>
            </form>
    ";
    echo $element;
}

function colaElement ($productimg, $productname, $productprice, $productid) {
    $element = "
    <form action=\"cola.php\" method=\"post\">
    <img src=\"$productimg\" alt=\"coke\" />

<div class=\"information reset\">
    <p class=\"title\">$productname</p>
    <p class=\"id\">Item:00001</p>

    <p class=\"price\">$productprice</p>

    <div class=\"button clearfix\">
        <form>
            <label for=\"quantity\">Quantity: </label>
            <input name=\"qnt_1\" type=\"text\" id=\"qnt_1\" value=\"0\" size=\"3\" data-price=\"1.99\" onkeyup=\"Falue()\" />
        </form>
        <p class=\"total\">
           <div style=\"display:inline\"> Total: $<div style=\"display: inline;\" id=\"ItemsTotal\" >0</div> </div>
        </p>
        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    <input type='hidden' name='product_id' value='$productid'>
    </div>
    <hr />
    <div class=\"details\">
        <label>Product Details</label>
      
        <input type=\"button\"  onclick=\"myFunction()\" href=\"javascript:void(0);\" value=\"Show more\" id=\"one\" />
        
        <div>
            <h6 id=\"textArea\"> </h6>
        </div>  
    </div>

</div>
</form>  
    ";
    echo $element;
}
?>