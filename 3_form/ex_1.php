<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form name="form_ex" action="ex_1_data.php" method="get">
        <input type="text" name="city" placeholder="miasto"
        <?php
        if(empty($_GET['city']))
        
        ?>>
        <input type="text" name="age" placeholder="wiek">
        <input type="submit" value="Prześlij">

    </form>
    
</body>
</html>