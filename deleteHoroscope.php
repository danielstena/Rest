<?php
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    session_start();
    if(isset($_SESSION["usersSign"])){
        unset($_SESSION["description"]);
        unset($_SESSION["usersSign"]);
        echo "true";
    }
    else{
        echo "false";
    }
}
else{
    die ("Så får du inte göra!!!!");
};