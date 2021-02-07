<?php
 class A{
     public function show(){
         return "Metoda show z klasy A";
     }
 }

    class B extends A{
        public function show(){
            return "Metoda show z klasy B";
        }

        public function showA(){
            return parent::show();
        }
    }

 $objA = new A();
 echo $objA->show(),"<br>";

 $objB = new B();
 echo $objB->show(),"<br>";

 //echo A::show(); //od wersji 8 nie działa

echo $objB->showA();

?>