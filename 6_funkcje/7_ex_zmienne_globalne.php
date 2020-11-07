<?php
/*Użytkownik ma w formularzu dwa pola input (wynik oraz liczba).
Za pomocą radio buttona wybiera działanie(dodawanie lub odejmowanie)
Dodaj w formularzu przycisk.
Utwórz dwie funkcje (Dodawanie i odejmowanie), które pobierają dane z wyniku oraz liczbę z formularza.
Wynik wyświetl z precyzją dwóch miejsc. (funckcja number_format())
Pole wynik jest nieaktywne, tylko wyświetla wynik.*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>

<body>

    <form method="POST">
        <input type="text" name="liczba" placeholder="liczba">
        <input type="text" name="wynik" placeholder="wynik" disabled>
        <br>
        <input type="radio" name="wybor" value="dodawanie1" id="1">
        <label for="1">Dodawanie</label>
        <input type="radio" name="wybor" value="odejmowanie1" id="2">
        <label for="2">Odejmowanie</label>
        <br>
        <input type="submit" value="Prześlij Formularz">
    </form>

        <?php
        $error=false;
        if(!empty($_POST['liczba'])){
            switch ($_POST['wybor']) {
                case 'dodawanie1':
                    function dodawanie($x, $y = 0){
                        return $x+$y;
                    }
                    dodawanie($_POST['liczba'], );
                break;
                case 'odejmowanie1':
                    function odejmowanie($liczba, $wynik = 0){}
                break;
                
                default:
                    $error = true;
                break;
            }
        }if($error==true){
            echo "Uzupełnij liczbę";
        }
        




        ?>
</body>

</html>