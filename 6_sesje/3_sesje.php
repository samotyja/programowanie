<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesje 3</title>
</head>
<body>
    <h4>Sesje 3</h4>
    <?php
        session_start();
        echo "Identyfikator sesji: ",session_id();
        //$_SESSION['name'] = 'Anna';
        echo "<hr>Imię: $_SESSION[name]<br>";
        unset($_SESSION['name']);
    ?>
    <a href="./1_sesje.php">Strona startowa</a>
</body>
</html>