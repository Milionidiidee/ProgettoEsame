<?php

function component($product_name,$product_price, $product_image, $product_id) {
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"carrello.php\" method=\"post\">
        <div class=\"card shadow\">
            <div>
                <img src=\"$product_image\" alt=\"Product1\" class=\"img-fluid card-img-top\">
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
                  xdcgfvgbnm,lkmjnhbgvfdxfcvgbh
                </p>
                <h5>
                <small><s class=\"text-secondary\">599€</s></small>
                  <span class=\"price\">$product_price</span>
                </h5>

                <button type=\"submit\"  class=\"btn btn-outline-dark my-2 my-sm-0 text-black\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                <input type=\"hidden\" name=\"product_id\" value=\"$product_id\">
            </div>
        </div>
    </form>
</div>

    ";

    echo $element;
}










function cartElement(){
    $element = "
    
    <form action=\"carrello.php\" method=\"get\" class=\"cart-items\">
                            <div class=\"border rounded\">
                                <div class=\"row bg-white\">
                                <div class=\"col-md-3 pl-0\">
                                    <img src=\"upload/product1.png\" alt=\"Image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6\">
                                    <h5 class=\"pt-2\">Product 1</h5>
                                    <small class=\"text-secondary\">Seller: dailytuition</small>
                                    <h5 class=\"pt-2\">599€</h5>
                                    <button type=\"submit\" class=\"btn btn-outline-dark  text-black\">Save for Later</button>
                                    <button type=\"submit\" class=\"btn btn-outline-dark mx-2  text-black\" name=\"remove\">Remove</button>
                                </div>
                                <div class=\"col-md-3 py-5\">
                                    <div>
                                        <button type=\"button\" class=\"btn btn-outline-dark text-black border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                        <button type=\"button\" class=\"btn btn-outline-dark text-black border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-5\"></div>
            </div>
        </div>
    ";
}