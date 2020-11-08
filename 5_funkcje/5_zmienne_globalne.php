<?php
    //zmienne globalne

    $global = 10;
    //echo $global;

    function show(){
        //echo "Wartość \$global w funkcji: $global" //error
    echo "Wartość \$global w funkcji: $GLOBALS[global]";
    echo "Wartość \$global w funkcji: {$GLOBALS['global']}";
    echo "Wartość \$global w funkcji:".$GLOBALS['global'];
    }

    show();
    //zmienna lokalna
    function number(){
        $x = 10;
        echo "zmienna wynosi: $x";
    }

    number();
    //echo $x //error

    //zmienne statyczne
    function add(){
        $x = 4;
        //$x = $x + 10;
        $x += 10;
        echo "\$x=$x";
    }
        
    add();//14
    add();//14
    add();//14
    echo '<br>';
    function add1(){
        static $x = 4;
        //$x = $x + 10;
        $x += 10;
        echo "\$x=$x";
    }
    add1();//14
    add1();//14
    add1();//14
    echo '<br>';

    //przekazywanie argumentów
    //przekazywanie argumentów przez wartość

    function addThree($x){
        $x +=3;
    }
    
    $number = 5;
    echo "\$number przed wywołaniem funkcji: $number<br>";
    addThree($number);
    echo "\$number po wywołaniem funkcji: $number<br>";
    
    //utworzyć funkcję addFour, przekazywanie argumentów przez referencję
    function addFour(&$x){
        $x +=4;
    }
    $number = 5;

    echo "\$number przed wywołaniem funkcji: $number<br>";
    addFour($number);
    echo "\$number po wywołaniem funkcji: $number<br>";
    addFour($number);
    echo "\$number po wywołaniem funkcji: $number<br>";

    //argumenty domyślne
    function add2($x, $y = 5){
        return $x + $y;
    }

    $a = 3;
    echo '<br>'.add2(2, 4);//6
    echo '<br>'.add2(10);//15
    echo '<br>'.add2($a, $a);//6
    echo '<br>'.add2($y = 10, $x = -1);//9

    //argumenty i typy danych
    function multi(int $x, int $y = 5){
        return $x * $y;
    }

    echo '<br>'.multi(1);//5
    echo '<br>'.multi(3, 5);//15
    echo '<br>'.multi(3.5, 5);//15


       ?>