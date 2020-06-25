<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/indexstyle.css">
    <link rel="stylesheet" href="public/css/footerstyle.css">
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
          <span style="position:relative; top:3px;">My Cart</span>
            <img src="public/Immagini/icona-carrello.png" width="40px">
          </a>
        </div>
    </nav>
    
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/Immagini/lavoratori.png" class="d-block w-100 immaginidacarosello" data-interval="5000">
      <div class="carousel-caption d-none d-block text-dark">
        <h5>I nostri magazzini</h5>
        <p>Grandi ed efficienti. Per darti ciò di cui hai bisogno.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/Immagini/corrieri.png" class="d-block w-100 immaginidacarosello" data-interval="5000">
      <div class="carousel-caption d-none d-block">
        <h5>I nostri corrieri</h5>
        <p>Cortesi e gentili. Per regalarti un sorriso.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/Immagini/consegna.png" class="d-block w-100 immaginidacarosello" data-interval="5000">
      <div class="carousel-caption d-none d-block text-dark">
        <h5 >I nostri pacchi</h5>
        <p>Robusti e resistenti. Affinchè tu non abbia alcun pensiero.</p>
      </div>
    </div>
  </div>
</div>

<section id="categorie">
	<a class="link-prodotti" href="#">
      <figure id="informatica">
          <img src="public/Immagini/computer.png">
          <figcaption>Electronics<img src="public/Immagini/arrow.png"></figcaption>
      </figure>
    </a>
    <a class="link-prodotti" href="#">
    	<figure id="libri">
    	<img src="public/Immagini/books.png">
        <figcaption>Books<img src="public/Immagini/arrow.png"></figcaption>
    	</figure>
    </a>
    <a class="link-prodotti" href="#">
      <figure id="casa">
          <img src="public/Immagini/casa.png">
          <figcaption>Home<img src="public/Immagini/arrow.png"></figcaption>
      </figure>
    </a>
    <a class="link-prodotti" href="#">
      <figure id="videogiochi">
          <img src="public/Immagini/videogames.png">
          <figcaption>Videogames<img src="public/Immagini/arrow.png"></figcaption>
      </figure>
    </a>
</section>

<section id="banner-offerta">
  <a href='#'>
    <figure id='prodotto-offerta' style='background-image: url("public/Immagini/Prodotti/7.png")'>
      <img id='offertaR' src='public/Immagini/offertaR.png'>
    </figure>'
  </a>
</section>

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

  <script src="public/js/top.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>