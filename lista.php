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
    
	<script src="Script/listascript.js"></script>
    
    <div id="mycontainer" class="container">
    	<div class="row">
          <aside id="filtri" class="col-12 col-sm-4 col-md-3">
          	<h2 id="ricerca">Ricerca Avanzata</h2>
            <div id="fake-form">
            	<label for="nome">Nome: </label><br>
                <input name="nome" id="nome" type="text" value=""><br>
               <label for="categoria">Categoria: </label><br>
                 <select name="categoria" id="categoria">
                     <option value="vuoto" selected> </option>
                     <option value="casa">Casa</option>
                     <option value="informatica">Informatica</option>
                     <option value="libri">Libri</option>
                     <option value="smartphone e cellulari">Smartphone e Cellulari</option>
                     <option value="videogiochi">Videogiochi</option>
                  </select><br>
             	<label for="venditore">Venditore: </label><br>
                <input name="venditore" id="venditore" type="text" value=""><br>
                <label for="voto">Voto minimo: </label><br>
                	<select name="voto" id="voto">
                     <option value="0" selected> </option>
                     <option value="0.5">0.5</option>
                     <option value="1.5">1.5</option>
                     <option value="2.5">2.5</option>
                     <option value="3.5">3.5</option>
                     <option value="4.5">4.5</option>
                  </select><br>
                 <label for="costomin">Costo minimo: </label><br>
                 <input name="costomin" id="costomin" type="number" step="0.1" value="0"><br>
                 <label for="costomax">Costo massimo: </label><br>
                 <input name="costomax" id="costomax" type="number" step="0.1" value="0"><br>
                 <label for="spedizionemax">Spedizione max: </label><br>
                 <input name="spedizionemax" id="spedizionemax" type="number" step="0.1" value="0"><br>
                 <label for="offerta">In offerta? </label>
                 <input name="offerta" id="offerta" type="checkbox" value="on"><br>
             		<button onclick="selezionaEriordina()">Cerca!</button>
             </div>
          </aside>
          <section class="col-12 col-sm-8 col-md-9">
          	<div id="ordinaper">
            	Ordina per: 
              <select id="ordinamento" name="ordine" onchange="selezionaEriordina()">
                  <option value="1" selected>A - Z</option>
                  <option value="2">Z - A</option>
                  <option value="3">Prezzo più basso</option>
                  <option value="4">Prezzo più alto</option>
              </select>
            </div>
            <input type='hidden' id='caratteri' name='caratteri' value='0'>
            <div id="lista">
            <script>calcolaCaratteri(); setCategoria(''); selezionaEriordina();</script>
            </div>
            <div id="comandi">
            	<button id="pageBack" onclick="pageBack()"></button>
                <button id="pageForward" onclick="pageForward()"></button>
            </div>
          </section>
      </div>

    </div>

  <?php
  for ($i=0; $i < 10; $i++) { 
    echo "Eccome".$i;
  }

?>
    <script>
    	loadCSS('Style/listastyle.css');
    	var cliccato = false;
        var form = document.getElementById("fake-form");
        var ricerca = document.getElementById("ricerca");

        ricerca.addEventListener("click", function(){
            if(!cliccato&&(window.innerWidth < 576)){
                form.style.display = "block";
                cliccato = true;
            }else if(window.innerWidth < 576){
                form.style.display = "none";
                cliccato = false;
            }
        });
    </script>
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