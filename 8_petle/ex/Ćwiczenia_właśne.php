<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    for($i=10;$i <=50;$i++){
        echo " ".$i;
    }

    echo "<br>";
    
    $b = 10;
    while ($b <= 50) {
        echo "$b ";
        $b++;
    }

    echo "<br>";

    $a = 10;
    do {
        echo " $a";
        $a++;
    } while ($a <= 50);





    ?>
</body>

</html>