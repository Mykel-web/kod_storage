<?php
$waga = $_POST['waga'];
$wzrost = $_POST['wzrost'] / 100;
$wynik = $waga / $wzrost;
echo "BMI to: $wynik";
?>
