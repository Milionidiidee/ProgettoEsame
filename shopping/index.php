<?php


//start session
session_start();

if(isset($_POST['add'])){
  ///print_r($_POST['product_id']);
  if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'], 'product_id');

    if(in_array($_POST['product_id'], $item_array_id)){
      echo "<script>alert(\"Product is alredy been added in the cart!\")</script>";
      echo "<script>window.location = \"index.php\"</script>";
    }else{
       
      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id' => $_POST['product_id']
      );

      $_SESSION['cart'][$count] = $item_array;
      print_r($_SESSION['cart']);
    }

  }else{

    $item_array = array(
      'product_id' => $_POST['product_id']
    );

    //Create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);

  }
}

require_once('php/CreateDb.php');
require_once('php/comp.php');

//ceate an instance of CreateDb
$database = new CreateDb("Productdb", "Producttb");


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
          <a id="link-carrello" href="http://localhost/PW%202020/esameprogetto/shopping/cart.php" class="nav-item text-light ml-auto">
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



    <div class="container">
      <div class="row text-center py-5">
        <?php
        

        $result = $database->getData();
        while ($row = mysqli_fetch_assoc($result)){
          component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
        }

        ?>
      </div>
    </div>


    <footer class="my-footer">
      <span class="footer-element">
          <a href="#">Let Us Help You</a>
      </span>
      <span class="footer-element">
          <a href="#">Privacy</a>
      </span>
      <span class="footer-element">
          <a href="#">Administration</a>
      </span>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <script src="../public/js/top.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>