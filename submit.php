<?php
session_start();
$pizzacrustinput = $_POST["data1"];
$_SESSION['pizzacrustinput'] = $pizzacrustinput;
echo "The Type Of Crust Is " . $_SESSION["pizzacrustinput"] . ".";

?>