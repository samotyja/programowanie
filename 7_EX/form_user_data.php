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
    if (!empty($_POST['city']&&!empty($_POST['color']))){
        $city = $_POST['city'];
        switch ($_POST['color']) {
            case 'r':
                echo "<h1>Dane z formularza</h1>";
                echo "Miasto: $city<br>";
                echo "Kolor: Czerwony";
                break;
            case 'g':
                echo "<h1>Dane z formularza</h1>";
                echo "Miasto: $city<br>";
                echo "Kolor: Zielony";
                break;
            
            default:
                $error=true;
                break;  
        }
        
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