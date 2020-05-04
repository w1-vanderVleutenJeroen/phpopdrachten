<?php
/**
 * User: Jeroen
 * Date: 04-05-2020
 * Time: 12:33
 * File: loguit.php
 */
?>

<?php
include "../../Includes/header.php"
?>

<?php

session_start();
session_destroy();

header('location: Opdracht_6.1.php');

?>

<?php
include "../../Includes/Footer.php"
?>
