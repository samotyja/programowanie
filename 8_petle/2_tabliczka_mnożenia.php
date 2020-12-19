<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Tabliczka Mnożenia</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="rozmiar" placeholder="Wielkość">
        <input type="submit" value="Potwierdz">
    </form>
    <br><br>
    <table>
        <?php
        if (isset($_GET['rozmiar'])){
        $rozmiar = $_GET['rozmiar'];
        $row = 1;
        do {
            echo '<tr>';
            $col = 1;
            do {
                echo '<td>', $row * $col, '</td>';
                $col++;
            } while ($col <= $rozmiar);
            $row++;
            echo '</tr>';
        } while ($row <= $rozmiar);
    }
    ?>
    </table>
</body>

</html>