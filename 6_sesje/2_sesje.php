<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesje 2</title>
</head>
<body>
    <h4>Sesje 2</h4>
    <?php
        session_start();
        echo "Identyfikator sesji: ",session_id();
        //$_SESSION['name'] = 'Anna';
        echo "<hr>Imię: $_SESSION[name]<br>";
    ?>
    <a href="./3_sesje.php">Sesje 3</a>
</body>
</html>