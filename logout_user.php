<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: logout-success.php");
exit();
?>
