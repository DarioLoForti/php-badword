<?php

    //VARIABILE DELL'INPUT PARAGRAFO

    $paragrafo = $_GET['paragrafo'];

    //VARIABILE DELL'INPUT PAROLA DA CENSURARE

    $parola = $_GET['parola'];

    //VARIABILE DELLA CENSURA

    $censura = '***';

    //VARIABILE DELLA FUNZIONE PER CAMIARE IL VALORE DI UNA STRINGA

    $new_paragrafo = str_replace($parola, $censura, $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text-center text-slim">
                <?php echo $paragrafo; ?>
                <p>Lunghezza del paragrafo: <?php echo strlen($paragrafo); ?></p>
            </div>
            <div class="col-12 py-5 text-center text-bold">
                <?php echo $new_paragrafo; ?>
                <p>Lunghezza del paragrafo: <?php echo strlen($new_paragrafo); ?></p>
            </div>
        </div>
    </div>
</body>
</html>
