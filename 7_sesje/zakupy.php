<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakupy</title>
</head>
<body>
    <?php
        $cenaklawiatur = 0;
        $cenamyszek = 0;
        if ($_GET['mouse']>0) {
           $cenamyszek = $_GET['mouse'] * $_SESSION['price']['mouse'];
        }
        if($_GET['keyboard']>0) {
           $cenaklawiatur = $_GET['keyboard'] * $_SESSION['price']['keyboard'];
        }
        $result = $cenamyszek+$cenaklawiatur;
        echo "Suma: ",$result,"zł";
    ?>
</body>
</html>