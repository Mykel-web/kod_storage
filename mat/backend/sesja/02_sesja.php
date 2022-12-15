<?php
session_start();
$_SESSION['wizyty'] = 0;
if(isset($_SESSION['wizyty'])){
    $_SESSION['wizyty'] += 1;
}
echo "Liczba sesji (sesja lifetime = 24 minuty): ".$_SESSION['wizyty'];