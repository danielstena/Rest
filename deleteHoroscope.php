<?php
session_start();
unset($_SESSION["description"]);
unset($_SESSION["usersSign"]);

echo "Det sparade horoskopet är nu borta";