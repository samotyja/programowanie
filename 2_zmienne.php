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
?>