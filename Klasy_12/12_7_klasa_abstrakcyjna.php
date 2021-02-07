<?php
   abstract class Person{
        public function speak(){
            return "osoba mówi";
        }
    }
    class Child extends Person{
        public function speak(){
           // return "Dziecko mówi";
           return parent::speak();
        }
        
    }
    $person = new Child();
    echo $person->speak();
?>