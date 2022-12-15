<?php
session_start();
$produkt=$_GET['produkt'];
$_SESSION[$produkt]++;
header('location:koszyk.php');
