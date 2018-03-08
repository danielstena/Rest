<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    if(isset($_SESSION["usersSign"])){
        
        echo "<br/><strong>Ditt horoskop är: " . $_SESSION["usersSign"] . "</strong>";
        echo "<br/>";
        echo "<br/>" .$_SESSION["description"];
    };
}
else{
    die("woops");
}
