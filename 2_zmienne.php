<?php
    //wersja języka php
    echo PHP_VERSION,'<hr>'; //7.2.34 (inni mają 7.4.10)

    //porównanie
    $x = 20;
    $y = 22;

    if ($x == $y){
        echo "$x jest równa $y";
    }else{
        echo "$x jest równa $y";
    }

    $x = 20;
    $y = 22;

    if ($x == $y){
        echo "\$x jest równa \$y";
    }else{
        echo "\$x jest równa \$y";
    }

    echo gettype($x),'<br>'; //integer
    echo gettype($y),'<br>'; //double
    
echo "<hr>";
    //operator <=>

    $x = 2;
    $y = 20.0;

    echo $x <=> $y;

    //SWITCH
    echo "<hr>";

    $country = 'Polska';
    switch ($country) {
        case 'Polska':
            echo '<br>Pochodzisz z Polski';
        break;
        case 'Gruzja':
            echo '<br>Pochodzisz z Gruzji';
        break;
        default:
            echo '<br>Pochodzisz z innego kraju niż Polska lub Gruzja';
    break;
    }

    echo "<hr>";

    $a=7.5;
    $b=10;
    $wynik=$a<=>$b;
//Ćwiczenie
//ify
    if ($wynik==-1){
        echo "Zmienna B Jest Większa od zmiennej A";
    }else if($wynik==1){
        echo "Zmienna A jest większa od zmiennej B";
    }else{
        echo "Zmienna A i B jest równa";
    }
//switche
    switch ($a <=> $b){
        case $b <=> $a:
            echo '<br><b>Zmienna A jest większa od zmiennej B';
        break;

        case $a <=> $b:
            echo '<br><b>Zmienna B jest większa od zmiennej A';
        break;

        default:
            echo '<br><b>Zmienna A i B jest równa';
        break;
    }



?>