<?php
class User{

    public $name;
    public $surname;
    public $city;
    public $height;

    public function setData($name, $surname, $city, $height){

        $this->name = $name;
        $this->surname = $surname;
        $this->city = $city;
        $this->height = $height;
    }

    public function getData(){

        echo <<<SHOW
            <hr>Twoje dane:<br>
            Imię: $this->name<br>
            Nazwisko: $this->surname<br>
            Miasto: $this->city<br>
            Wzrost: $this->height
            <hr>
SHOW;   

    }

}
?>