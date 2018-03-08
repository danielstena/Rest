<?php
session_start();
if(isset($_SESSION["usersSign"])){
    unset($_SESSION["description"]);
    unset($_SESSION["usersSign"]);
    echo "True";
}
else{
    echo "false";
}
