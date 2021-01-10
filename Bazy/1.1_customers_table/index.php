<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klienci</title>
</head>
<body>
    <h1>Lista klinetów</h1>
    <!-- Połącznie z bazą danych -->
    <?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $db= "teb1";
    $connect = mysqli_connect($servername, $username,$password,$db);
    //sprawdzenie poprawności połączenia

    $sql = "SELECT name, surname FROM customers";
    
    $result = $connect->query($sql);
    echo "<table>";
    echo <<<HEADER
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
    <tr>
HEADER;
    while ($row = $result->fetch_assoc()) {
        echo <<<ROW
        <tr>
            <td>$row[name]</td>
            <td>$row[surname]</td>
        </tr>
ROW;
    }
    echo "</table>";
    $connect->close();
    
   
    ?>
</body>
</html>