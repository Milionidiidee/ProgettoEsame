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
        $conn = new PDO("mysql:host=localhost; dbname=testpw","testpw","prova1");
        echo "Connesso";

        $sql = "INSERT INTO `MyGuest` (`nome`,`email`,`commento`) VALUES ('Giovanni', 'gg@pp.it', 'aaah')";
        echo $sql;

        $conn->exec($sql);
        $last_id = $conn->lastInsertId();

        echo "inserito Guest numero $last_id";

        $sql = "SELECT Nome FROM Prodotti WHERE Categoria='Informatica'";
    }
    catch (Exception $e) {
        echo $e->getMessage();\
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
