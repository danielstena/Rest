<?php

    class person {
        public $firstName;
        public $lastName;
        public $personalnNmber;

        function __construct($firstName, $lastName, $personalnNmber){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->personalnNmber = $personalnNmber;
        }    
    }     

    class Horoscope {
        public $name;
        public $minMonth;
        public $maxMonth;
        public $minDay;
        public $maxDay;

        function __construct($name, $minMonth, $maxMonth, $minDay, $maxDay, $description){
            $this->name = $name;
            $this->minMonth = $minMonth;
            $this->maxMonth = $maxMonth;
            $this->minDay = $minDay;
            $this->maxDay = $maxDay;
            
        }    
    }     

    $horoskop = array(
        $vattumannen =  new Horoscope("vattumannen", 1, 2, 20, 18,"info om vattumannen"),
        $fiskarna =  new Horoscope("fiskarna", 2, 3, 19, 20,"info om fiskarna"),
        $väduren =  new Horoscope("väduren", 3, 4, 21, 19,"info om väduren"),
        $oxen =  new Horoscope("oxen", 4, 5, 20, 21,"info om oxen"),
        $kräftan =  new Horoscope("kräftan", 6, 7, 22, 22,"info om kräftan"),
        $lejonet =  new Horoscope("lejon", 7, 8, 23, 22,"info om lejonet"),
        $jungfrun =  new Horoscope("jungfrun", 8, 9, 23, 22,"info om jungfrun"),
        $vågen =  new Horoscope("vågen", 9, 10, 23, 22,"info om vågen"),
        $skorpionen =  new Horoscope("skorpionen", 10, 11, 23, 22,"info om skorpionen"),
        $skytten =  new Horoscope("skytten", 11, 12, 23, 21,"info om skytten"),
        $stenbocken =  new Horoscope("stenbocken", 12, 1, 22, 19,"info om stenbocken")
    );    

   

    ?>
