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
    
<article id='tutto' class='container'><div class='row'>
        	<div id='image-container' class='col-12 col-md-5'>
        		<div id='immagine' style='background-image: url("Immagini/Prodotti/1.png")'></div>
            </div>
            <div id='testo' class='col-12 col-md-7'>
              <h1 id='nome'>Acer Aspire</h1>
              <form method='POST' action='http://localhost/PW%202020/progettoesame/nelcarrello.php'>
                <input id='id' type='hidden' name='id' value='1'>
                <button id='acquista' type='submit'>Aggiungi al Carrello</button>
              </form>
              <h4 id='categoria'>Informatica</h4>
              <h6 id='venditore'>Venduto da Acer</h6>
              <div id='costi'><span id='prezzopieno'>574.99</span> 499.99£ + 9.99 £ di spedizione</div>            
              <img id='voto' src='Immagini/Voti/rate-35.png'>
              <div id='descrizione'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div></div>
            <div class='row'>
            	<div class='banner col-12'></div>
            </div>
        	</article><script src="Script/prodottoscript.js"></script>
<script>loadCSS("Style/prodottostyle.css")</script>
<footer class="my-footer">
      <span class="footer-element">
          <a href="#">Serve una mano?</a>
      </span>
      <span class="footer-element">
          <a href="#">Privacy</a>
      </span>
      <span class="footer-element">
          <a href="#">Ammistrazione</a>
      </span>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script src="Script/footerscript.js"></script>
</body>
</html>