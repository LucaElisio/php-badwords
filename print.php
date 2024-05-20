<?php 
// Dichiaro variabile che prende tramite GET il valore di ciò che l'utente scrive negli input
$text = $_GET["text"];
$hide = $_GET["censured"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Stampa dei dati</h1>
    <p>Testo: <?php echo $text; ?></p>
    <p>Lunghezza testo: <?php echo strlen($text); ?></p>
    <p>Parola censurata: <?php echo $hide; ?></p>
    <p>Testo censurato: <?php echo str_replace($hide, "***", $text); ?> </p>
    <!-- Il primo parametro corrisponde alla parola da ricercare, il secondo quello con cui va sostituito, il terzo dove ricercare -->
</body>
</html>