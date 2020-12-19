<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tabliczka.css">
    <title>Tabliczka Mnożenia</title>
</head>

<body>
    <br><br>
    <table>
        <?php
        $count=0;
        for ($i=1; $i <= $_GET['row']; $i++) { 
            echo '<tr>';
            for ($j=1; $j <= $_GET['col'] ; $j++) {
                $count++;
                echo '<td>', $count,'</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>