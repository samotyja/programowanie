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
        
    ?>