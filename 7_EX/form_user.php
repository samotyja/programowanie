<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie Domowe</title>
</head>

<body>
    <h1>Dane</h1>
    <form name="form1" action="./form_user_data.php" method="post">

        <label>Miasto:</label>
        <input type="text" name="city" placeholder="Miasto" size="10" autofocus id="cit1">
        <select name="color">
            <option value="r">Czerwony</option>
            <option value="g">Zielony</option>
        </select>
        <br><br>
        <input type="submit" value="Pokaż dane" size="5">

    </form>
</body>

</html>