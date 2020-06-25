<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Prodotti</title>
</head>
<body>
    <?php
    try {
        $conn = new PDO("mysql:host=localhost; dbname=phpmyadmin","ciao","ciao");

        $sql = "SELECT * FROM prodotti";

        if (isset($_POST['nome']) && $_POST['nome'] != "") {
            $sql = $sql." WHERE Nome LIKE '%".$_POST['nome']."%'";
            echo $sql;
            echo "<br>";
        }

        $q = $conn->query($sql);

        if ($q) {
            $rows = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach( $rows as $row )
            {
                echo "Nome: " . $row["Nome"]. " - Img: " . $row["Immagine"]. " - Desc: " . $row["Descrizione"]. " - Prezzo: " . $row["Prezzo"]. "<br>";
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

    <h2 id="ricerca">Ricerca Avanzata</h2>
        <form action="./lista.php" method="POST">
            <label for="nome">Nome: </label><br>
            <input name="nome" id="nome" type="text" value=""><br>
            <label for="categoria">Categoria: </label><br>
                <select name="categoria" id="categoria">
                    <option value="vuoto" selected> </option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select><br>
                <input type="submit" value="Cerca">
        </form>

    <script src="public/app.js"></script>
</body>
</html>