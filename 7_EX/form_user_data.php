<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane</title>
        
</head>
<body>

    <?php
    $error=false;
    if (!empty($_POST['city'])&&!empty($_POST['color'])){
        $city = $_POST['city'];
        switch ($_POST['color']) {
            case 'r':
                $color = "Czerwony";
                break;
            case 'g':
                $color = "Zielony";
                break;
            
            default:
                $error=true;
                break; 


        }
            echo "<h1>Dane z formularza</h1><br>";
            echo "Miasto: $city<br>";
            echo "Kolor: $color";
    }else{
        $error=true;
    }

    if($error){
        ?>
        <script>
        history.back()
        </script>
        <?php
    }

    ?>
    </body>
    </html>