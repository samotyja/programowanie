<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>
    <style>
        span {
            color: red;
        }
    </style>
    <form method="post">
        <input type="text" name="name" placeholder="Imie"><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="color" name="color">
        <input type="submit" name="button" value="Wyślij dane">
    </form>
    <?php
    if (isset($_POST['button'])) {
        if (!empty($_POST['name']) && !empty($_POST['surname'])) {
            include './2_function_1.php';
            echo data($_POST['name'], $_POST['surname'],$_POST['color']);
        } else {
            echo "<span>Proszę uzupełnić dane</span>";
        }
    }

    ?>

</body>

</html>