<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>
<?php
require "./function.php";
?>

    <form method="GET">
        <input type="text" name="x" placeholder="x">
        <select name="dzialanie">
            <option name="dzialanie" value="dodawanie">+</option>
            <option name="dzialanie" value="odejmowanie">-</option>
            <option name="dzialanie" value="mnozenie">*</option>
            <option name="dzialanie" value="dzielenie">/</option>
        </select>

        <input type="text" name="y" placeholder="y">
        <input type="submit" name="button" value="=">
        <input type="text" name="wynik" id="wynik" value="<?php $_SESSION['result']; ?>" disabled>
        <br><br>
    </form>



        <?php
    if (isset($_GET['button'])) {
        if (!empty($_GET['x']) && !empty($_GET['y']) &&is_numeric ($_GET['x']) && is_numeric($_GET['y'])) {
            switch ($_GET['dzialanie']) {
                case 'dodawanie':
                    $_SESSION['result'] = dodawanie($_GET['x'], $_GET['y']);
                    break;
                case 'odejmowanie':
                    $_SESSION['result'] = odejmowanie($_GET['x'], $_GET['y']);
                case 'mnozenie':
                    $_SESSION['result'] = mnozenie($_GET['x'], $_GET['y']);
                    break;
                case 'dzielenie':
                    $_SESSION['result'] = dzielenie($_GET['x'], $_GET['y']);

                    break;
                default:
                    echo 'Wypełnij prawidłowo pola';
                    break;
            }
        ?>
            <script>
                document.getElementById('wynik').value = <?php echo $_SESSION['result']; ?>;
            </script>

    <?php
        } else {
            echo '<hr>Wypełnij prawidłowo Pola';
        }
    }








    ?>
</body>

</html>