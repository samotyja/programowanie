<?php
//Dodaj diwe funkcje mnożsenie i dzielenie
//Dodaj możliwość zresetowania wyniku =>0
?>

<?php
session_start();
if (!isset($_SESSION['result'])) {
    $_SESSION['result'] = 0;
} else {
    $_SESSION['result'] = number_format($_SESSION['result'], 2);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>

    <?php
    function dodawanie($wynik, $liczba)
    {
        return $wynik + $liczba;
    }
    function odejmowanie($wynik, $liczba)
    {
        return $wynik - $liczba;
    }
    function mnozenie($wynik, $liczba)
    {
        return $wynik * $liczba;
    }
    function dzielenie($wynik, $liczba)
    {
        return $wynik / $liczba;
    }

    ?>
    <form method="GET">
        <input type="text" name="liczba" placeholder="liczba">
        <input type="text" name="wynik" id="wynik" value="<?php echo number_format($_SESSION['result'], 2); ?>" placeholder="wynik" disabled>
        <br>
        <input type="radio" name="dzialanie" value="dodawanie" id="1">
        <label for="1">Dodawanie</label>
        <input type="radio" name="dzialanie" value="odejmowanie" id="2">
        <label for="2">Odejmowanie</label>
        <input type="radio" name="dzialanie" value="mnozenie" id="3">
        <label for="3">Mnożenie</label>
        <input type="radio" name="dzialanie" value="dzielenie" id="4">
        <label for="4">Dzielenie</label>
        <br>
        <input type="submit" name="button" value="Prześlij Formularz">
        <input type="submit" name="reset" value="Reset">
    </form>

    <?php
    if (isset($_GET['reset'])) {
        $_SESSION['result'] = 0;
    ?>
        <script>
            document.getElementById('wynik').value = <?php echo number_format($_SESSION['result'], 2); ?>;
        </script>

        <?php
    }
    if (isset($_GET['button'])) {
        if (!empty($_GET['liczba']) && !empty($_GET['dzialanie'])) {
            $result = 0;
            switch ($_GET['dzialanie']) {
                case 'dodawanie':
                    $_SESSION['result'] = dodawanie($_SESSION['result'], $_GET['liczba']);
                    break;
                case 'odejmowanie':
                    $_SESSION['result'] = odejmowanie($_SESSION['result'], $_GET['liczba']);
                case 'mnozenie':
                    $_SESSION['result'] = mnozenie($_SESSION['result'], $_GET['liczba']);
                    break;
                case 'dzielenie':
                    $_SESSION['result'] = dzielenie($_SESSION['result'], $_GET['liczba']);

                    break;
                default:
                    echo 'Wypełnij prawidłowo pole działanie';
                    break;
            }
            $_SESSION['result'] = number_format($_SESSION['result'], 2);
            $result = $_SESSION['result'];
        ?>
            <script>
                document.getElementById('wynik').value = <?php echo number_format($_SESSION['result'], 2); ?>;
            </script>

    <?php
        } else {
            echo '<hr>Wypełnij wszystkie pola';
        }
    }








    ?>
</body>

</html>