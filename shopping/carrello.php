<?php

    session_start();

    require_once("CreateDb.php");
    require_once("component.php");

    $db = new CreateDb("Productdb", "Producttb");

?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="../public/css/indexstyle.css">
    <link rel="stylesheet" href="../public/css/footerstyle.css">
    <link rel="stylesheet" href="../public/css/carrellostyle.css">
  </head>

  <style>
      main{
          height: 600px;
      }   


    .fa-star,
    .fa-star-half{
        color: yellowgreen;
        padding: 3% 0;
    }

    .shopping-cart{


        padding: 3% 0;
    }

    div.col-md-6,
    div.col-md-3{
        padding: 10px 0;
    }
  </style>

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
              <span style="position:relative; top:3px;">My Cart</span>
                <img src="../public/Immagini/icona-carrello.png" width="40px">
              </a>
            </div>
        </nav>

<main>
        <div class="container-fluid">
            <div class="row px-5">
                <div class="col-md-7">
                    <div class="shopping-cart">
                        <h6>My Cart</h6>
                        <hr>

                        <form action="carrello.php" method="get" class="cart-items">
                            <div class="border rounded">
                                <div class="row bg-white">
                                <div class="col-md-3 pl-0">
                                    <img src="upload/product1.png" alt="Image1" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="pt-2">Product 1</h5>
                                    <small class="text-secondary">Seller: dailytuition</small>
                                    <h5 class="pt-2">599€</h5>
                                    <button type="submit" class="btn btn-outline-dark  text-black">Save for Later</button>
                                    <button type="submit" class="btn btn-outline-dark mx-2  text-black" name="remove">Remove</button>
                                </div>
                                <div class="col-md-3 py-5">
                                    <div>
                                        <button type="button" class="btn btn-outline-dark text-black border rounded-circle"><i class="fas fa-minus"></i></button>
                                        <input type="text" value="1" class="form-control w-25 d-inline">
                                        <button type="button" class="btn btn-outline-dark text-black border rounded-circle"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
</main>    

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