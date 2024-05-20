<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Inserimento dati</h1>
    <form action="print.php">
        <label for="text">Inserisci del testo</label><br>
        <textarea name="text" id="text"></textarea><br>
        <label for="hide">Inserisci la parola da censurare</label><br>
        <input type="text" name="censured" id="hide">
        <div style="margin-top: 10px;">
            <button type="submit">Invia</button>
        </div>
    </form>
</body>
</html>