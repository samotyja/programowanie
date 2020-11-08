<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>
    <h4>Strona główna</h4>
    <?php
        session_start();
        echo "Identyfikator sesji: ",session_id();
        $_SESSION['name'] = 'Anna';
        echo "<hr>Imię: $_SESSION[name]<br>";
    ?>
    <a href="./2_sesje.php">Sesje 2</a>
</body>
</html>