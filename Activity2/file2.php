<?php
session_start();

$_SESSION["day"] = "Tuesday";
$_SESSION["subject"] = "Back-End";
$_SESSION["user"] = "client";   


print_r($_SESSION);
echo "<br>";

unset($_SESSION["user"]);
print_r($_SESSION);
echo "<br>";


session_destroy();

setcookie("test","testing phase",time()+10);
echo $_COOKIE["test"];

?>
