<?php
    function f(){
        echo 'Funkcja';
    }//stworzenie funkcji

    f();//wywołanie funkcji

    function f1(){
        return 'Funkcja nr1';
    }

    echo '<br>',f1();

    function show($name){
        return "Imię: $name";
    }

    echo show('Anna'),'<br>';

    $name1 = 'Krystian';
    echo show($name1),'<br>';

    //Zdefiniuj funkcję dodawanie
    //Wywołaj funkcje dodawanie z dwoma argumentami

    function add($x,$y){
        return $x+$y;
    }


    echo add(3, 5),'<br>';
    echo add(10, 65),'<br>';

    $a1 = 10;
    $b1 = 20;
    $result = add($a1, $b1);
    echo "Wynik dodawania $a1 i $b1 Wynosi: $result<br>";

    //oblicz średnią dwóch zmiennych a1 oraz b1 i wynik wyświetl w formacie:
        //średnia ... i .. wynosi: ...
        //wykorzystaj funkcje add()

    $avg= add($a1, $b1)/2;
    echo "Średnia $a1 i $b1 Wynosi $avg<br>";

    function number($x){
        return $x;
    }

    $result = number(10);
    echo "$result<br>";
    echo gettype($result),"<br>";

    $result = number(10.5);
    echo "$result<br>";
    echo gettype($result), "<br>";

    function calkowita($x):int{
        return $x;
    }

    echo calkowita(10),'<br>';
    echo calkowita(10.5),'<br>';

    function real($x):float{
    return $x;
    }

    echo real(10),'<br>';
    echo real(10.5),'<br>';

    function data(int $a, float $b){
        return $a+$b;
    }

    echo data(2.5, 3);
    echo data(2.99999, 3);
    echo data(2.5, 3.5);
?>