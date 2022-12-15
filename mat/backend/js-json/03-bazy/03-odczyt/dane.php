<?php
class dziecko
{
	public $imie, $nazwisko, $dataUr;
}
$polaczenie = new mysqli('localhost', 'root', '', 'przedszkole');;
$polaczenie->query("SET NAMES utf8");
$wynik = $polaczenie->query("SELECT imie,nazwisko,dataUr FROM dane");

$dzieci = [];

while ($rekord = $wynik->fetch_assoc()) {
	$d = new dziecko();
	$d->imie = $rekord["imie"];
	$d->nazwisko = $rekord["nazwisko"];
	$d->dataUr = $rekord["dataUr"];
	array_push($dzieci, $d);
}
$json = json_encode($dzieci);
echo $json;
$polaczenie->close();
