<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Dane pobrane z formularza</h4>
    
    <?php
    //print_r($_GET); //wyświetla wszystkie przesłane dane
    // echo $_GET['surname'];
    //operatory logiczne AND &&, OR ||
    if (/*isset*/!empty($_GET['surname'])&& !empty($_GET['pass'])&& !empty($_GET['name'])&& !empty($_GET['kod1'])&& !empty($_GET['kod2'])) {
        echo 'imie wprowadzone<br>';
    echo <<<T
    Imię i Nazwisko: $_GET[surname]$_GET[name]<br>
    Hasło: $_GET[pass] <br>
    Kod pocztowy: $_GET[kod1]-$_GET[kod2]
T;
    }else{
        //header("Location:./1_zadanie.php");
    

    ?>
    <script>
        history.back();
    </script>
    
    <?php
    }
    ?>
</body>
</html>