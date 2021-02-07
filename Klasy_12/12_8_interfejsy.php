<?php
interface PersonInterface{
    public function getName();
    public function getSurname();
}

interface ChildInterface{
    public function allVaccinations($vaccinations):string;
}

    class Person implements PersonInterface{
        public $name;
        public $surname;

        public function __construct($name, $surname){
            $this->name = $name;
            $this->surname = $surname;
        }

        public function getName(){
            return $this->name;
        }

            public function getSurname(){
                return $this->surname;
            }
    }

    class Child extends Person implements ChildInterface{
        public function allVaccinations($vaccinations):string{
            // if ($vaccinations == true) {
            //     return "Zaszczepiony";
            // }else{
            //     return "Należy zaszczepić dziecko";
            // }
            return $vaccinations > 1 ? "Zaszczepiony" : "Należy zaszczepić dziecko";
        }
    }

 $obj = new Person("Janusz", "Nowak");
 $obj->name = "Jan";
 echo $obj->getName();
 echo $obj->getSurname(),"<br>";

 $child = new Child("Anna","Kowalska");
 $child->name = "Agnieszka";
 echo $child->getName();
 echo $child->getSurname();

 echo $child->allVaccinations(false);
?>