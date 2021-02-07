<?php
    class Person{
        public $name;
        public $surname;
        public $city;
        public $age;
        public $nationality = "Polska";

        function __construct($name, $surname, $city){
            $this->name = $name;
            $this->surname = $surname;
            $this->city = $city;
        }

        public function getAll(){
            echo <<<SHOW
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            Miasto: $this->city<br>
            Wiek: $this->age<br>
            Narodowość: $this->nationality
            <hr>
SHOW;
        }
    }

    $person1 = new Person("Jan", "Nazwisko", "Poznań");
    
    $person1->age = 20;
    $person1->getAll();
    echo gettype($person1->name); //string
    echo gettype($person1->age); //string
?>