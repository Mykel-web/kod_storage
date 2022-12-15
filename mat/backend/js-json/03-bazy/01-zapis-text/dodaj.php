<?php
$polaczenie = new mysqli('localhost', 'root', '', 'przedszkole');
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$dataUr = $_POST['dataUr'];
$polaczenie->query("SET NAMES utf8");
$zapytanie = "INSERT INTO dane (imie,nazwisko,dataUr) VALUES ('$imie','$nazwisko','$dataUr')";
$polaczenie->query($zapytanie);
$polaczenie->close();
echo ' Dane zapisano: ' . $imie . ' ' . $nazwisko . ' urodzony ' . $dataUr;
