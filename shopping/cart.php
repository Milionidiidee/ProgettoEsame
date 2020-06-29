<?php

session_start();

require_once("php/comp.php");
require_once("php/CreateDb.php");

$db = new CreateDb("Productdb", "Producttb");

if(isset($_POST['remove'])){
  if($_GET['action'] == 'remove'){
    foreach($_SESSION['cart'] as $key => $value){
      if($value['product_id'] == $_GET['id']){
        unset($_SESSION['cart'][$key]);
        echo "<script>alert(\"Product has been Removed..!\")</script>";
        echo "<script>window.location = 'cart.php'</script>";
      }
    }
  }
}

?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/indexstyle.css">
    <link rel="stylesheet" href="../public/css/footerstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <style>

    div.col-md-3,
    div.col-md-6{
        padding: 15px 0;
    }

    h6{
        padding-top: 15px;
    }
    

    </style>
  </head>
<body>
    <nav id="mynavbar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark menu">
        <a class="navbar-brand" href="http://localhost/PW%202020/esameprogetto/index.php">Online Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/PW%202020/esameprogetto/lista.php">Products<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/PW%202020/esameprogetto/ordini.php">Your Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/PW%202020/esameprogetto/about.php">About Us</a>
            </li>
          </ul>
          <form action="lista.php" class="form-inline m-auto">
            <input class="form-control mr-sm-2" name="nome" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0 text-black" style="border-color: white" type="submit">Search</button>
          </form>
          <a id="link-carrello" href="#" class="nav-item text-light ml-auto">
          <h5>
            <i class="fas fa-shopping-cart"></i>My Cart
            <?php

            if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);
              echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
            }else{
              echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
            }

            ?>
            
          </h5>
          </a>
        </div>
    </nav>

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shoppig-cart">
                <h6>My Cart</h6>
                <hr>

                <?php
                
                $total = 0;
                /*if(isset($_SESSION['cart'])){
                  $product_id = array_column($_SESSION["cart"], 'product_id');

                  $result = $db->getData();
                  while($row = mysqli_fetch_assoc($result)){
                    foreach($product_id as $id){
                      if($row["id"] == $id){
                        cartElement($row["product_name"], $row["product_price"], $row["id"]);
                        $total = $total + (int)$row['product_price'];
                      }
                    }
                  }
                }else{
                  echo "<h5>Cart is Empty</h5>";
                }*/
                
                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
            
            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                  <div class="col-md-6">
                    <?php
                    
                    if(isset($_SESSION['cart'])){
                     $count = count($_SESSION['cart']);
                     echo "<h6>Price($count items)</h6>";
                    }else{
                     echo "<h6>Price(0 items)</h6>";
                    }
                    
                    ?>
                    <h6>Delivery Charges</h6>
                    <hr>
                    <h6>Amount Payable</h6>
                  </div>
                  <div class="col-md-6">
                    <h6>€<?php echo $total?></h6>
                    <h6 class="text-success">FREE</h6>
                    <hr>
                    <h6>€<?php 
                      echo $total;
                    ?></h6>
                  </div>
                </div>
            </div>

        </div>
    </div>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <script src="../public/js/top.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>