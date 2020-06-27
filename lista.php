<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/indexstyle.css">
    <link rel="stylesheet" href="public/css/footerstyle.css">
    <link rel="stylesheet" href="public/css/listastyle.css">
</head>
<body>
<?php
    try {
        $conn = new PDO("mysql:host=localhost; dbname=progettoesame","filippo","password");

        $sql = "SELECT * FROM prodotti";

        $esisteCondizionePrecedente = false;

        if (isset($_POST['nome']) && $_POST['nome'] != "") {
            $sql = $sql." WHERE (Nome LIKE '%".$_POST['nome']."%')";
            $esisteCondizionePrecedente = true;
        }
        if (isset($_POST['categorie']) && $_POST['categorie'] != "") {
          if ($esisteCondizionePrecedente) $sql = $sql." AND WHERE (Categorie LIKE '%".$_POST['categorie']."%')";
          else {
            $sql = $sql." WHERE (Categorie LIKE '%".$_POST['categorie']."%')";
            $esisteCondizionePrecedente = true;
          }
        }
        if (isset($_POST['venditori']) && $_POST['venditori'] != "") {
          if ($esisteCondizionePrecedente) $sql = $sql." AND WHERE (Venditori LIKE '%".$_POST['venditori']."%')";
          else {
            $sql = $sql." WHERE (Venditori LIKE '%".$_POST['venditori']."%')";
            $esisteCondizionePrecedente = true;
          }
        }
        if (isset($_POST['voti']) && $_POST['voti'] != "") {
          if ($esisteCondizionePrecedente) $sql = $sql." AND WHERE (Voti=".$_POST['voti'].")";
          else {
            $sql = $sql." WHERE (Voti=".$_POST['voti'].")";
            $esisteCondizionePrecedente = true;
          }
        }

        if (isset($_POST['ordine']) && $_POST['ordine'] != "") {
          if ($_POST['ordine'] == "1") $sql = $sql." ORDER BY Nome ASC";
          else if ($_POST['ordine'] == "2") $sql = $sql." ORDER BY Nome DESC";
        }
        

        /*if (isset($_POST['categorie']) && $_POST['categorie'] != "") {
          $sql = $sql." AND Categorie LIKE '%".$_POST['categorie']."%'";
          //echo $sql;
          echo "<br>";
        }

        if (isset($_POST['venditori']) && $_POST['venditori'] != "") {
        $sql = $sql." AND Venditori LIKE '%".$_POST['venditori']."%'";
        //echo $sql;
        echo "<br>";
        }*/






        //echo $sql;
        $q = $conn->query($sql);

        if ($q) {
            $rows = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach( $rows as $row )
            {
                echo "Nome: " . $row["Nome"]. " - Img: " . $row["Immagine"]. " - Desc: " . $row["Descrizione"]. " - Prezzo: " . $row["Prezzo"].  " - Categorie: " . $row['Categorie'].   " - Venditori: " . $row['Venditori']. "<br>";
            }
        }else {
            echo "Err";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

    #per ogni elemento nell'array del Db creo la casella prodotto
?>
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
    
  <!--<script src="public/js/lista.js"></script>-->
    
    <div id="mycontainer" class="container">
      <div class="row">
          <aside id="filtri" class="col-12 col-sm-4 col-md-3">
          <h2 id="ricerca">Ricerca Avanzata</h2>
        <form action="./lista.php" method="POST">
            <label for="nome">Nome: </label><br>
            <input name="nome" id="nome" type="text" value=""><br>
            <label for="categorie">Categorie: </label><br>
                <select name="categorie" id="categorie">
                    <option value="" selected> </option>
                    <option value="informatica">Informatica</option>
                    <option value="videogiochi">Videogiochi</option>
                    <option value="telefonia">Telefonia</option>
                    <option value="libri">Libri</option>
                    <option value="utilità">Utilità</option>
                </select><br>

                <label for="venditori">Venditori: </label><br>
                <input name="venditori" id="venditori" type="text" value=""><br>

                 <label for="voti">Voti: </label><br>
                    <select name="voti" id="voti">
                      <option value="" selected> </option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="3.5">3.5</option>
                      <option value="4">4</option>
                      <option value="4.5">4.5</option>
                    </select><br>
                    <select id="ordinamento" name="ordine">
                      <option value="1" selected>A - Z</option>
                      <option value="2">Z - A</option>
                    </select>
                <input  class="btn btn-outline-dark my-2 my-sm-0 text-black" type="submit" value="Cerca">
        </form>

          </section>
          

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
          <a href="">Administration</a>
      </span>
</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <script src="public/js/top.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>