<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h1>Pole oraz Obówd Prostokąta</h1>
    <meta name="viewport" content="width">
    <form action="calculations.php" method="POST">
    <input type="text" name="x" placeholder="Liczba x">m<br>
    <input type="text" name="y" placeholder="Liczba y">m
    <br>
    <input type="radio" name="calc" value="pole" checked>Pole
    <input type="radio" name="calc" value="obwod">Obwód
    <br><br>
    <input type="submit" value="Wyślij dane">

</body>
</html>