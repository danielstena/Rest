<?php
session_start();

if(isset($_SESSION["usersSign"])){
    
    echo "<br/><strong>Ditt horoskop är: " . $_SESSION["usersSign"] . "</strong>";
    echo "<br/>";
    echo "<br/>" .$_SESSION["description"];
};


