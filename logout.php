<?php
include 'conexion.php';
$_SESSION = array();
session_destroy();
header("location: index.php");
 ?>
