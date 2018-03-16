<?php

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    session_start();
    require "functions.php";
    require "data.php";
    
    #Här tog jag koden ifrån som flyttades till functions
    
    updateSign($horoskop, $month, $day);    
}

else{
    die ("Så får du inte göra!!!!");
}




