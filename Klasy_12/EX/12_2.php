<?php
    class Person{
        public $name;
        public $surname;
        public $nationality;

        function __construct($name=null, $surname=null, $nationality=null){
            $this->name = $name;
            $this->surname = $surname;
            $this->city = $nationality;
        }

        public function getAll(){
            echo <<<SHOW
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            Narodowość: $this->nationality
            <hr>
SHOW;
        }
    }

    $person1 = new Person("Jan", "Nazwisko",);
    $person1->getAll();

