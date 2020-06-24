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
        <a class="navbar-brand" href="http://sito259319.altervista.org/index.php">A tuoi Ordini!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/PW%202020/progettoesame/index.php">Prodotti<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Su di noi</a>
            </li>
          </ul>
          <form action="lista.php" class="form-inline m-auto">
            <input class="form-control mr-sm-2" name="nome" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 text-light" style="border-color: white" type="submit">Search</button>
          </form>
          <a href="#" class="nav-item text-light ml-auto">
          <span style="position:relative; top:3px;">Il mio Carrello</span>
            <img src="Immagini/icona-carrello.png" width="40px">
          </a>
        </div>
    </nav>
    
    <main id="centro" class="container">
    	L'articolo è stato inserito nel carrello! Clicca <a href="http://localhost/PW%202020/progettoesame/lista.php">qui</a> per proseguire con gli acquisti oppure <a href="http://localhost/PW%202020/progettoesame/carrello.php">qui</a> per andare dritto dritto al carrello!
    </main>
    <script>
    	document.getElementById("centro").style.minHeight = (window.innerHeight - 100)+"px";
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