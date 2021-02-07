    <?php
    class Animal{
    public $mass;
    public $age;

    public function looks(){
    return "Zwierzę patrzy";
    }

    public function breathes(){
    return "Zwierzę oddycha";
    }
    }

    class Fish extends Animal{
    public function swims(){
    return "Ryba pływa";
    }
    }

    class Mammal extends Animal{
    public function run(){
    return "Ssak biega";
    }
    }

    class Bird extends Animal{
    public function fly(){
    return "Ptak leci";
    }
    }

    class Dog extends Mammal{
    public $breed;
    public $coatColor;

    public function bark(){
    return "Pies szczeka";
    }

    public function fetch(){
    return "Pies aportuje";
    }
    

    public function getDog(){
        echo <<<SHOW
        Burek ma $this->age lat.<br>
        Waży: $this->mass kg;<br>
        Rasa: $this->breed<br>
        Kolor sierści: $this->coatColor<hr>
SHOW;
    }
    }
    ?>