<?php
session_start();
require "functions.php";
require "data.php";

#Här tog jag koden ifrån som flyttades till functions

if(updateSign($horoskop, $month, $day) == "true"){
    echo "<script>runView();</script>";
}
else{
    echo "Finns inget juuuee";
}


