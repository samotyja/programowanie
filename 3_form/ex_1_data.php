<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <?php
    if (!empty($_GET['city'])&& !empty($_GET['age'])) {
    echo <<<T
      Miasto: $_GET[city]<br>
      Wiek: $_GET[age]
T;
    }else{
        header("location:./ex_1.php?city=$_GET[city]&$_GET[age]");
    }
?>
</body>
</html>