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
          <a href="http://localhost/PW%202020/progettoesame/lista.php" class="nav-item text-light ml-auto">
              <a class="nav-link" href="">Prodotti<span class="sr-only">(current)</span></a>
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
          <a id="link-carrello" href="" class="nav-item text-light ml-auto">
          <span style="position:relative; top:3px;">Il mio Carrello</span>
            <img src="Immagini/icona-carrello.png" width="40px">
          </a>
        </div>
    </nav>
    
	<main class="container">
    	<article id="mail">
          <section class="descrizione">
              Non sai come contattarci? Eccoti la nostra mail!
          </section>
          <section class="contenuto">
          </section>
          <span class="scritte">adriano.izzi@questanon�unaveramail.it</span>
        </article>
        
        <article id="telefono">
          <section class="descrizione">
              Se invece sei proprio di fretta, eccoti il nostro numero di telefono!
          </section>
          <section class="contenuto">
          </section>
          <span class="scritte">adriano.izzi@questanon�unaveramail.it</span>
        </article>
        
        <section id="termine" class="descrizione">
        	Siamo sempre a tua disposizione!
        </section>
    </main>
    <script src="Script/helpscript.js"></script>
    <script>loadCSS("Style/helpstyle.css");</script>
<footer class="my-footer">
      <span class="footer-element">
          <a href="#">Serve una mano?</a>
      </span>
      <span class="footer-element">
          <a href="#">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
      </span>
      <span class="footer-element">
          <a href="http://localhost/PW%202020/progettoesame/amministrazione.php">Ammistrazione</a>
      </span>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script src="Script/footerscript.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>