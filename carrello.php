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
              <a class="nav-link" href="http://sito259319.altervista.org/about.php">Su di noi</a>
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
    

<script src="Script/carrelloscript.js"></script>

<div class="container">
	<form id="form-holder" class="row" action="ordine.php" method="post">
    
    	<div id="banner-sinistra" class="col-md-2 order-1"></div>
    
      <section id="riassunto-prodotti" class="col-md-8 order-2">
          <h3 id="titolo-prodotti">Ricapitolando</h3>
          <div id="tabella-prodotti" class="row">
          	<span id="immagini" class="col-md-5">Immagine</span>
            <span id="nomi" class="col-md-3">Nome</span>
            <span id="costi" class="col-md-2">Costo</span>
            <span id="spedizioni" class="col-md-2">Spedizione</span>
          </div>

<div class='row justify-content-end riga-riassunto-costi'>
        		<span class='col-md-2'>0</span>
                <span class='col-md-2'>0</span>
        	</div>
            <input type='hidden' name='totale' id='totale' value='0'>			
			<div id="prosegui-1">Se il carrello è corretto, premi qui! <button type="button" onclick="cambia(0,1)">Prosegui</button></div>

		</section>        
        <section id="form-pt-1" class="col-md-8 order-3">
        	<div class="row">
				<label class="col-md-6">Città</label>
                <span class="col-md-6">
                	<input id="città" name="città" type="text" required>
                </span>
            </div>
        	<div class="row">
                <label class="col-md-6">Cap</label>
                <span class="col-md-6">
                	<input id="cap" name="cap" type="text" required>
                </span>
            </div>
            <div class="row">
                <label class="col-md-6">Indirizzo</label>
                <span class="col-md-6">
                	<input id="indirizzo" name="indirizzo" type="text" required>
                </span>
            </div>
            <div class="row">
                <label class="col-md-6">Interno o Scala</label>
                <span class="col-md-6">
                	<input id="interno" name="interno" type="text" required>
                </span>
            </div>
            <div class="row">
                <span class="col-md-6">
                	<button type="button" onclick="cambia(1,-1)">Indietro</button>
                </span>
                <span class="col-md-6">
                	<button type="button" onclick="cambia(1,1)">Prosegui</button>
                </span>
            </div>
          </section>
          
          <section id="form-pt-2" class="col-md-8 order-4">
          <div class="row">
				<label class="col-md-6">Nome Intestatario</label>
                <span class="col-md-6">
                	<input id="nome" name="nome" type="text" required>
                </span>
            </div>
            <div class="row">
				<label class="col-md-6">Cognome Intestatario</label>
                <span class="col-md-6">
                	<input id="cognome" name="cognome" type="text" required>
                </span>
            </div>
        	<div class="row">
				<label class="col-md-6">Numero di Carta</label>
                <span class="col-md-6">
                	<input id="carta" name="carta" type="number" required>
                </span>
            </div>
        	<div class="row">
            	<label class="col-md-6">CVC</label>
                <span class="col-md-6">
                	<input id="cvc" name="cvc" type="number" required>
                </span>
            </div>
        	<div class="row">
                <label class="col-md-6">Scadenza</label>
                <span class="col-md-6">
                	<input id="scadenza" name="scadenza" type="date" required>
                </span>
            </div>
        	<div class="row">
                <span class="col-md-6">
                	<button type="button" onclick="cambia(2,-1)">Indietro</button>
                </span>
                <span class="col-md-6">
                	<button type="button" onclick="cambia(2,1); riempi();">Prosegui</button>
                </span>
            </div>
          </section>
          
          <section id="form-pt-3" class="col-md-8 order-5">
          		<h4>Confermi? </h4>
        	<div class="row">
				<div class="col-md-6">Città:</div>
                <div class="col-md-6" id="r-città"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Cap:</div>
                <div class="col-md-6" id="r-cap"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Indirizzo:</div>
                <div class="col-md-6" id="r-indirizzo"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Interno:</div>
                <div class="col-md-6" id="r-interno"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Nome:</div>
                <div class="col-md-6" id="r-nome"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Cognome:</div>
                <div class="col-md-6" id="r-cognome"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Numero di carta:</div>
                <div class="col-md-6" id="r-carta"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Cvc:</div>
                <div class="col-md-6" id="r-cvc"></div>
            </div>
        	<div class="row">
                <div class="col-md-6">Scadenza:</div>
                <div class="col-md-6" id="r-scadenza"></div>
            </div>
        	<div class="row">
                <span class="col-md-6">
                	<button type="button" onclick="cambia(3,-1)">Indietro</button>
                </span>
                <span class="col-md-6">
                	<button>Acquista</button>
                </span>
            </div>
          </section>


	<div id="banner-destra" class="col-md-2 order-12"></div>

	</form>
</div>
<script>loadCSS("Style/carrellostyle.css"); positionFooter();</script>

<footer class="my-footer">
      <span class="footer-element">
          <a href="#">Serve una mano?</a>
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