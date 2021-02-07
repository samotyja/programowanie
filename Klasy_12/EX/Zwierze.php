    <?php
    class Zwierze{
        public $mass;
        public $age;

        public function dajGlos(){
            return "Zwierzę daje głos";
        }
    }

    class Kot extends Zwierze{
        public function drapMeble(){
            return "Kot drapie meble";
        }
    }

    class Pies extends Zwierze{
        public function gryzKapcie(){
            return "Pies gryzie kapcie";
        }
    }

    class Pers extends Kot{
    }

    class NorweskiLesny extends Kot{

        public function gubSiersc(){
            return "Kot gubi sierść";
        }
    }

    class Doberman extends Pies{

        public function gonListonosza(){
            return "Pies Goni listonosza";
        }
    }

    class Jamnik extends Pies{
    }

    ?>