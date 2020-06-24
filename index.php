<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ai tuoi Ordini!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="Style/menustyle.css">
    <script src="Script/menuscript.js"></script>
    </head>
<body>
    <nav id="mynavbar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark menu">
        <a class="navbar-brand" href="http://localhost/PW%202020/progettoesame/index.php">A tuoi Ordini!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/PW%202020/progettoesame/lista.php">Prodotti<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Su di noi</a>
            </li>
          </ul>
          <form action="lista.php" class="form-inline m-auto">
            <input class="form-control mr-sm-2" name="nome" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 text-light" style="border-color: white" type="submit">Search</button>
          </form>
          <a href="http://localhost/PW%202020/progettoesame/carrello.php" class="nav-item text-light ml-auto">
          <span style="position:relative; top:3px;">Il mio Carrello</span>
            <img src="Immagini/icona-carrello.png" width="40px">
          </a>
        </div>
    </nav>
    
<script type="text/javascript">
      var _iub = _iub || [];
      _iub.csConfiguration = {"countryDetection":true,"consentOnContinuedBrowsing":false,"whitelabel":false,"lang":"it","siteId":1915498,"cookiePolicyId":70447823,"cookiePolicyUrl":"http://sito259319.altervista.org/policy.php", "banner":{ "acceptButtonDisplay":true,"customizeButtonDisplay":true,"position":"float-bottom-center" }};
    </script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Immagini/lavoratori.png" class="d-block w-100 immaginidacarosello" data-interval="5000">
      <div class="carousel-caption d-none d-block text-dark">
        <h5>I nostri magazzini</h5>
        <p>Grandi ed efficienti. Per darti ciò di cui hai bisogno.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Immagini/corrieri.png" class="d-block w-100 immaginidacarosello" data-interval="5000">
      <div class="carousel-caption d-none d-block">
        <h5>I nostri corrieri</h5>
        <p>Cortesi e gentili. Per regalarti un sorriso.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Immagini/consegna.png" class="d-block w-100 immaginidacarosello" data-interval="5000">
      <div class="carousel-caption d-none d-block text-dark">
        <h5 >I nostri pacchi</h5>
        <p>Robusti e resistenti. Affinchè tu non abbia alcun pensiero.</p>
      </div>
    </div>
  </div>
</div>

<section id="categorie">
	
	<a class="link-prodotti" href="http://localhost/PW%202020/progettoesame/lista.php?categoria=informatica">
      <figure id="informatica">
          <img src="Immagini/computer.png">
          <figcaption>Informatica<img src="Immagini/arrow.png"></figcaption>
      </figure>
    </a>
    <a class="link-prodotti" href="http://localhost/PW%202020/progettoesame/lista.phpp?categoria=libri">
    	<figure id="libri">
    	<img src="Immagini/books.png">
        <figcaption>Libri<img src="Immagini/arrow.png"></figcaption>
    	</figure>
    </a>
    <a class="link-prodotti" href="http://localhost/PW%202020/progettoesame/lista.php?categoria=casa">
      <figure id="casa">
          <img src="Immagini/casa.png">
          <figcaption>Casa<img src="Immagini/arrow.png"></figcaption>
      </figure>
    </a>
    <a class="link-prodotti" href="http://localhost/PW%202020/progettoesame/lista.php?categoria=videogiochi">
      <figure id="videogiochi">
          <img src="Immagini/videogames.png">
          <figcaption>Videogiochi<img src="Immagini/arrow.png"></figcaption>
      </figure>
    </a>
</section>


<section id="banner-offerta">
  <a href='http://localhost/PW%202020/progettoesame/prodotto.php?id=9'>
        		<figure id='prodotto-offerta' style='background-image: url("Immagini/Prodotti/9.png")'>
                  <img id='offertaR' src='Immagini/offertaR.png'>
              </figure>'
              </a></section>

<script> loadCSS("Style/indexstyle.css");</script>

<footer class="my-footer">
      <span class="footer-element">
          <a href="http://localhost/PW%202020/progettoesame/help.php">Serve una mano?</a>
      </span>
      <span class="footer-element">
          <a href="#">Privacy</a>
      </span>
      <span class="footer-element">
          <a href="http://localhost/PW%202020/progettoesame/amministrazione.php">Ammistrazione</a>
      </span>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script src="Script/footerscript.js"></script>
</body>
</html>