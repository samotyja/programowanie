<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require "./scripts/szescian.php";
?>

<body>
    <h4>Sześcian</h4>
    <img src="./img/2.png">
    <hr>
    <h4>Dane</h4>
    <form action="" method="get">
        <input type="number" name="a" placeholder="A" id=""><br><br>
        <input type="number" name="b" placeholder="B" id=""><br><br>
        <input type="number" name="c" placeholder="C" id=""><br><br>
        <input type="submit" name="button" value="Oblicz">
    </form>

    <?php
    if (isset($_GET['button'])) {s
        if (!empty($_GET['a']) && !empty($_GET['b']) && !empty($_GET['c']) && is_numeric($_GET['a']) && is_numeric($_GET['b']) && is_numeric($_GET['c'])) {
            $wynikpole = pole($_GET['a'], $_GET['b'], $_GET['c']);
            echo "Pole: ".$wynikpole.'cm<sup>2</sup><br>';

            $wynikobjentosc = objentosc($_GET['a'], $_GET['b'], $_GET['c']);
            echo "Objętość: ".$wynikobjentosc . 'cm<sup>3</sup><br>';

            $wynikdlugosc = dlugosc($_GET['a'], $_GET['b'], $_GET['c']);
            echo "Długość Przekątnej: ".$wynikdlugosc . 'cm<sup></sup><br>';

            $wynikpromienwpis = promienwpis($_GET['a'], $_GET['b'], $_GET['c']);
            echo "Długość promienia kuli wpisanej: ".$wynikpromienwpis . 'cm<sup></sup><br>';

            $wynikpromienopis = promienopis($_GET['a'], $_GET['b'], $_GET['c']);
            echo "Długość promienia kuli opisanej: ".$wynikpromienopis . 'cm<sup></sup>';

        } else {
            echo 'Wypełnij prawidłowo dane';
        }
    }

    ?>
</body>

</html>