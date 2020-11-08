<?php//Dodać na pierwszej stronie formularz z województwami (3, select)
//Formularz przekierowywuje do drugiej strony gdzie wyświetla wybrane województwa
//na drugiej stronie w zależności od wybranego województwa mamy do wyboru 3 miasta (checkbox) po zatwierdzeniu formularza jestesmy przekierowani do trzeciej strony
//gdzie będzie wyświetlane wybrane województwo i miasta
//Na trzeciej stronie możliwości powrotu do strony pierwszej ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona 1</title>
</head>

<body>

    <h4>Strona 3</h4>
    <?php
    session_start();
    echo "Identyfikator sesji: ", session_id();
    $_SESSION['miasto'] = $_GET['miasto'];
    echo '<br>Wybrane Województwo: '.$_SESSION['name'];
    echo '<br>Wybrane Miasto: '.$_SESSION['miasto'].'<br>';
    ?>
<a href="./6_ex_sesje.php">Usupełnij jeszcze raz</a>


</body>

</html>