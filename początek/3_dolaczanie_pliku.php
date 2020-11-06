<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetlenie plików</title>
</head>
<body>
    Początek pliku
    <?php
        include './file/3_file.php';
        include_once './file/3_file.php';
        include './file/3_animal.php';
        echo 'Require:'; //wymagany
        require './file/3_animal.php';
        require_once './file/3_animal.php';
    ?>
    Koniec pliku
</body>
</html>