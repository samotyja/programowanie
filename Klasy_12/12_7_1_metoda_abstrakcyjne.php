<?php
    abstract class Person{
        abstract public function getName();//nakazuje stosowanie tej funkcji

    }

    class Child extends Person{
        public function getName(){
            return "Imię dziecka";
        }
      public function go(){
            return "Dziecko idzie";
        }
    }

    //echo Child::go(); //należy dodaś static przed metodą
    $obj = new Child();
    
?>