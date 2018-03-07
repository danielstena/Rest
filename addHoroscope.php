<?php

session_start();
include "data.php";
// if(isset($_POST["socialNumber"])){

    #kod för att bara ta dom fyra sista.
    $personnummer = $_POST["personnr"];
    $month = $personnummer[2] . $personnummer[3]; 
    $day = $personnummer[4] . $personnummer[5]; 
    $_SESSION["personnr"] = $personnummer;


        foreach ($horoskop as $a){
        
            if ($month == $a->minMonth and $day >= $a->minDay ){
                $_SESSION["usersSign"] = $a->name;
                echo $_SESSION["usersSign"];
                
            }
            elseif($month == $a->maxMonth and $day <= $a->maxDay  ){
                $_SESSION["usersSign"] = $a->name;
                echo $_SESSION["usersSign"];
            }
        }

    
// }
// Die("WOOOPS");