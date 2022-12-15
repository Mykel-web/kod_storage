<?php
class dziecko
{
    public $imie, $nazwisko, $dataUr;
}
$polaczenie = new mysqli('localhost', 'root', '', 'przedszkole');
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$dataUr = $_POST['dataUr'];
$polaczenie->query("SET NAMES utf8");
$zapytanie = "INSERT INTO dane (imie,nazwisko,dataUr) VALUES ('$imie','$nazwisko','$dataUr')";
$polaczenie->query($zapytanie);
$polaczenie->close();

$d = new dziecko();
$d->imie = $imie;
$d->nazwisko = $nazwisko;
$d->dataUr = $dataUr;

$json = json_encode($d);
echo $json;
