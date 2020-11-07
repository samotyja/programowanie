<?php
    function data($name, $surname,$color){
        $name = ucfirst(strtolower($name));
        $surname = ucfirst(strtolower($surname));

        return"$name $surname $color";
    
    }