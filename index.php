<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/indexstyle.css">
    <link rel="stylesheet" href="public/css/footerstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-center" href="#">Online Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prodotti</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Prodotti</a>
          <a class="dropdown-item" href="#">Info & Contatti</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">About Us</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
    <a id="link-carrello" href="#" class="nav-item text-light ml-auto">
      <span style="position:relative; top:3px;">Il mio Carrello</span>
      <img src="public/Immagini/icona-carrello.png" width="40px">
    </a>
  </div>
</nav>
</header>

<!--Main>-->
<main>
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
          <figcaption>Informatica<img src="public/Immagini/arrow.png"></figcaption>
      </figure>
    </a>
    <a class="link-prodotti" href="http://localhost/PW%202020/progettoesame/lista.phpp?categoria=libri">
    	<figure id="libri">
    	<img src="public/Immagini/books.png">
        <figcaption>Libri<img src="public/Immagini/arrow.png"></figcaption>
    	</figure>
    </a>
    <a class="link-prodotti" href="#">
      <figure id="casa">
          <img src="public/Immagini/casa.png">
          <figcaption>Casa<img src="public/Immagini/arrow.png"></figcaption>
      </figure>
    </a>
    <a class="link-prodotti" href="#">
      <figure id="videogiochi">
          <img src="public/Immagini/videogames.png">
          <figcaption>Videogiochi<img src="public/Immagini/arrow.png"></figcaption>
      </figure>
    </a>
</section>


<section id="banner-offerta">
  <a href='#'>
        		<figure id='prodotto-offerta' style='background-image: url("public/Immagini/Prodotti/9.png")'>
                  <img id='offertaR' src='public/Immagini/offertaR.png'>
              </figure>'
              </a></section>

<script> loadCSS("public/css/indexstyle.css");</script>

</main>

<!--Footer-->
<footer class="my-footer">
      <span class="footer-element">
          <a href="#">Serve una mano?</a>
      </span>
      <span class="footer-element">
          <a href="#">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
      </span>
      <span class="footer-element">
          <a href="#">Ammistrazione</a>
      </span>
</footer>

<button id="MyBtn">Top</button>
<!--/Footer-->



<script src="public/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>