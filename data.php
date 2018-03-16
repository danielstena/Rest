<?php

    class Horoscope {
        public $name;
        public $minMonth;
        public $maxMonth;
        public $minDay;
        public $maxDay;
        public $description;

        function __construct($name, $minMonth, $maxMonth, $minDay, $maxDay, $description){
            $this->name = $name;
            $this->minMonth = $minMonth;
            $this->maxMonth = $maxMonth;
            $this->minDay = $minDay;
            $this->maxDay = $maxDay;
            $this->description = $description;
        }    
    }     

    $horoskop = array(
        $vattumannen =  new Horoscope("vattumannen", 1, 2, 20, 18,"Född: 20 januari - 18 februari <br/>
        Fredsälskare, klarsynt, intuitiv, lojal, uppfinningsrik, revolutionär
        <br/> Element: Vatten"),
        $fiskarna =  new Horoscope("fiskarna", 2, 3, 19, 20,"Född: 19 februari - 20 mars <br/>
        Empati, human, slarvig, vänlig, hemlighetsfull, lättpåverkad, inspirerande
        <br/> Element: Vatten"),
        $väduren =  new Horoscope("väduren", 3, 4, 21, 19,"Född: 21 mars - 19 april <br/> 
        Varm, entusiastisk, social, känslosam, stressad, impulsstyrd, aggressiv
        <br/> Element: Eld"),
        $oxen =  new Horoscope("oxen", 4, 5, 20, 21,"Född: 20 april - 20 maj <br/>
        Envis, beskyddande, lojal, tålmodig, uthållig, stabil, praktisk, realistisk
        <br/> Element: Jord"),
        $tvillingarna = new Horoscope("tvillingarna", 5, 6, 22, 22,"Född: 21 maj - 21 juni <br/>
        Kvick, kommunikativ, ytlig, nyfiken, självständig, modig, impulsiv, stressad
        <br/> Element: Luft"),
        $kräftan =  new Horoscope("kräftan", 6, 7, 23, 22,"Född: 22 juni - 22 juli <br/>
        Föräldern, beskyddaren, bevararen, den trofaste, den lojale & sympatiske
        <br/> Element: Vatten"),
        $lejonet =  new Horoscope("lejon", 7, 8, 23, 22,"Född: 23 juli - 22 augusti <br/>
        Storsint, kärleksfull, viljestark, svarsjuk, ledare, trofast, plikttrogen
        <br/> Element: Solen"),
        $jungfrun =  new Horoscope("jungfrun", 8, 9, 23, 22,"Född: 23 augusti - 22 september <br/>
        Blyg, självmedveten, analytisk, produktiv, kritisk, föränderlig 
        <br/> Element: Jord"),
        $vågen =  new Horoscope("vågen", 9, 10, 23, 22,"Född: 23 september - 22 oktober <br/>
        Förälskelse, charm, obeslutsamhet, förföriskhet, diplomati, social kompetens
        <br/> Element: Luft"),
        $skorpionen =  new Horoscope("skorpionen", 10, 11, 23, 22,"Född: 23 oktober - 21 november </br>
        Intensiv, svarsjuk, passionerad, tystlåten, intensiv, lojal, modig, stark
        <br/> Element: Vatten"),
        $skytten =  new Horoscope("skytten", 11, 12, 23, 21,"Född: 22 november - 21 december <br/>
        Ärlig, generös, idealistisk, optimistisk, överdrivande, entusiastisk, sökare
        <br/> Element: Eld"),
        $stenbocken =  new Horoscope("stenbocken", 12, 1, 22, 19,"Född: 22 december - 19 januari <br/>
        Tillbakadragen, blyg, trogen, pliktkänsla, ambitiös, lojal 
        <br/> Element: Jord")
    );    


    ?>
