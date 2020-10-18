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
    <input type="text" name="name" placeholder="Imię"><br>
    <input type="text" name="surname" placeholder="Nazwisko"><br>
    <input type="password" name="pass" placeholder="Hasło"><br>
    <input type="text" name="kod1" size="1" maxlength="2"> - <input type="text" name="kod2" size="2" maxlength="3">

    <br><br>
    <input type="submit" value="Wyślij dane">

</body>
</html>