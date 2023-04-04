<?php

//sono un commento
# sono un commento
/*
commento su più righe
*/

// variabili
$nome = 'Beth';
$cognome = 'Smith';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
    <h2>Ciao mi chiamo <?php echo ucfirst($nome); ?> <?php echo ucfirst($cognome); ?></h2>
</body>
</html>