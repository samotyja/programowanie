<?php

    require_once ("./class/Animal.php");

    $burek = new Dog();
    echo $burek->bark();
    echo $burek->run();
    echo $burek->looks();
    echo $burek->breathes();

    $burek->mass = 15;
    $burek->age = 12;
    $burek->breed = "Jamnik";
    $burek->coatColor= "podpalany";

    echo "<br>Burek ma ",$burek->age," lat<br> Waży: ",$burek->mass," kg<hr>";

    $burek->getDog();


?>