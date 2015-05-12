<?php
session_start();
$selectedarray = $_POST["selectedarray"];

$_SESSION['selectedarray'] = $selectedarray;
echo "." . $_SESSION["selectedarray"] . ".";
?>