<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
</head>
<body>
    <?php

    $x=$_POST['x'];
    $y=$_POST['y'];

    if (!empty($_POST['x'])&& !empty($_POST['y'])&&($_POST['calc']=="pole")) {
        $pole=($x*$y);
        echo "Pole wynosi: ".$pole."m<sup>2</sup><br><br>";
        echo $x."m * ".$y."m = ".$pole."m<sup>2</sup>";

    }else if (!empty($_POST['x'])&& !empty($_POST['y'])&&($_POST['calc']=="obwod")) {
        $obwod=(2*$x+2*$y);
        echo "Obówd wynosi: ".$obwod."m<br><br>";
        echo "(".$x."m + ".$y."m)x2 = ".$obwod."m";

    }else{
        header("location:form.php?");
    }
?>
</body>