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

        $sql = "SELECT * FROM prodotti WHERE Nome='Noninf'";

        $q = $conn->query($sql);
        #$q-> setFetchMode(PDO::FETCH_ASSOC);

        $rows = $q->fetchAll(PDO::FETCH_ASSOC);

        foreach( $rows as $row )
        {
            echo "Nome: " . $row["Nome"]. " - Img: " . $row["Immagine"]. " - Desc: " . $row["Descrizione"]. " - Prezzo: " . $row["Prezzo"]. "<br>";
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

    #per ogni elemento nell'array del Db creo la casella prodotto
    echo "    <div>
    <img src='img'>
    <h3>Nome</h3>
    <img src='rating'>
    <h5>prezzo</h5>
    </div>";
    ?>
</body>
</html>

<?php
while ($row = $q->fetch()){
            echo "Nome: " . $row["Nome"]. " - Img: " . $row["Immagine"]. " - Desc: " . $row["Descrizione"]. " - Prezzo: " . $row["Prezzo"]. "<br>";
        } ?>