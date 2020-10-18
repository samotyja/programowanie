<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h1>Formularz z danymi użytkowników</h1>
    <meta name="viewport" content="width">
    <form action="./2_zadanie_dane.php" method="get">
    <?php
        if(!empty($_GET['name'])){
            $name=$_GET['name'];
            echo "<input type=\"text\" name=\"name\" placeholder=\"imię\" value=\"$name\"><br><br>";
        }else{
            echo '<input type="text" name="name" placeholder="Imię"><br><br>';
        }
    ?>
    <?php
    if(!empty($_GET['surname'])){
            $surname=$_GET['surname'];
            echo "<input type=\"text\" name=\"surname\" placeholder=\"nazwisko\" value=\"$surname\"><br><br>";
        }else{
            echo '<input type="text" name="surname" placeholder="Nazwisko"><br><br>';
        }
    ?>
    <input type="password" name="pass" placeholder="Hasło"><br><br>
    <input type="text" name="kod1" size="1" maxlength="2"> - <input type="text" name="kod2" size="2" maxlength="3">
    <h4>Ulubiony kolor</h4>
    <input type="radio" name="color" value="r" checked>Czerwony
    <input type="radio" name="color" value="g">Zielony
    <input type="radio" name="color" value="b">Niebieski<br><br>
    <br><br>
    <input type="checkbox" name="statute">Regulamin<br><br>
    <input type="submit" value="Wyślij dane">
    
</form>
</body>
</html>