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

    <h4>Strona 2</h4>
    <?php
    session_start();
    echo "Identyfikator sesji: ", session_id();
    $_SESSION['name'] = $_GET['wojewodztwa'];
    echo "<br>Wybrane Województwo: " . $_SESSION['name'];
    switch ($_SESSION['name']) {
        case 'Wielkopolska':
    ?>
            <form action="./6_ex_sesje3.php" method="GET">
                <br>
                <input type="checkbox" name="miasto" value="Poznań" id="1">
                <label for="1">Poznań</label>
                <input type="checkbox" name="miasto" value="Konin" id="2">
                <label for="2">Konin</label>
                <input type="checkbox" name="miasto" value="Jarocin" id="3">
                <label for="3">Jarocin</label><br>
                <input type="submit" value="Wyślij">
            </form>
        <?php
            break;
        case 'Malopolska':
        ?>
            <form action="./6_ex_sesje3.php" method="GET">
                <br>
                <input type="checkbox" name="miasto" value="Kraków" id="4">
                <label for="4">Kraków</label>
                <input type="checkbox" name="miasto" value="Wielniczka" id="5">
                <label for="5">Wielniczka</label>
                <input type="checkbox" name="miasto" value="Nowysącz" id="6">
                <label for="6">Nowy Sącz</label><br>
                <input type="submit" value="Wyślij">
            </form>
        <?php
            break;
        case 'Dolnoslaskie':
        ?>
            <form action="./6_ex_sesje3.php" method="GET">
                <br>
                <input type="checkbox" name="miasto" value="Wrocław" id="7">
                <label for="7">Wrocław</label>
                <input type="checkbox" name="miasto" value="Legnica" id="8">
                <label for="8">Legnica</label>
                <input type="checkbox" name="miasto" value="Jelenia Góra" id="9">
                <label for="9">Jelenia Góra</label><br>
                <input type="submit" value="Wyślij">
            </form>
        <?php
            break;

        default:
            echo "Błąd";
            break;
    }





        ?>




</body>

</html>