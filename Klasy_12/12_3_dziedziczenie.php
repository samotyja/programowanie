<?php
    class A{
        public $a;

        public function setA($a){
            $this->a =$a;
        }
        
        public function getA(){
            return $this->a;
        }
    }

    class B extends A{
        private $b;
    
        public function setB($b){
        $this->b = $b;
    }

    public function getB(){
        return $this->b;
    }
}

    $objA = new A();
    $objA->setA("Obiekt A");
    echo $objA->getA(),"<br>";

    $objB = new B();
    $objB->setB("Obiekt B");
    echo $objB->getB(),"<br>";
    $objB->setA("Obiekt B korzysta z metody klasy A");
    echo $objB->a,"<br>";
    echo $objB->getA();

    $objA->b = "Test"; //dodanie nowej własciwości do Klasy A
    echo $objA->b; //wyświetlenie nowej własciwości z Klasy A
    //$objA->setB("Test"); nie można skorzystać z własciwości klasy B

?>