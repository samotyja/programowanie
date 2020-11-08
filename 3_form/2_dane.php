<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane pobrane z formularza</h4>
    
    <?php
    //print_r($_GET); //wyświetla wszystkie przesłane dane
    // echo $_GET['surname'];

    echo <<<T
    Nazwisko: $_GET[surname]<br>
    Hasło: {$_GET['pass']}
T;
    ?>
</body>
</html>