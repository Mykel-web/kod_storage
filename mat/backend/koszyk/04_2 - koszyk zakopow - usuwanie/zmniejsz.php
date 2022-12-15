<?php
session_start();
$produkt=$_GET['produkt'];
$_SESSION[$produkt]--;
if(($_SESSION[$produkt])<=0 )   unset($_SESSION[$produkt]);
header('location:koszyk.php');
