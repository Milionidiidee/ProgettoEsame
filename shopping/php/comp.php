<?php


function component($product_name, $product_price, $product_image, $product_id) {
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form action=\"index.php\" method=\"post\">
            <div class=\"card shadow\">
                <div>
                    <img src=\"$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$product_name</h5>
                    <h6>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"fas fa-star\"></i>
                    <i class=\"far fa-star\"></i>
                    </h6>
                    <p class=\"card-text\">
                        Some quick example text to build on the card.
                    </p>
                    <h5>
                        <small><s class=\"text-secondary\">$product_price</s></small>
                        <span class=\"price\">519€</span>
                    </h5>
                    <button class=\"btn btn-outline-dark my-2 my-sm-0 text-black\" type=\"submit\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                    <input type=\"hidden\" name=\"product_id\" value='$product_id'>

                </div>
            </div>
        </form>
      </div>
    
    
    
    ";

    echo $element;
}


ini_set('memory_limit', '-1');
ini_set('max_execution_time', 300);


function cartElement($product_image, $product_name, $product_price, $product_id){

    $element = "
    
    
    <form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
    <div class=\"border rounded\">
        <div class=\"row bg-white\">
        <div class=\"col-md-3 pl-0\">
        <img src= $product_image alt=\"Image1\" class=\"img-fluid\">
        </div>
        <div class\col-md-6\">
        <h5 class=\"pt-2\">$product_name</h5>
        <small class=\"text-secondary\">Seller: Online Store</small>
        <h5 class=\"pt-2\">$product_price</h5>
        <button type=\"submit\" class=\"btn btn-outline-dark text-black\">Save for Later</button>
        <button type=\"submit\" class=\"btn btn-danger text-white mx-2\" name=\"remove\">Remove</button>
        </div>
        <div class=\"col-md-3 text-center py-5\">
        <button type=\"button\" class=\"btn btn-outline-dark text-black border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
        <button type=\"button\" class=\"btn btn-outline-dark text-black border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
        </div>
        </div>
    </div>
    </form>
    
    
    ";

    echo cartElement($product_image, $product_name, $product_price);

}