<?php
header('Content-Type: application/json');
class osoba
{
   public $imie, $nazwisko;
}
$imiona = ['Stefan', 'Jan', 'Piotr'];
$nazwiska = ['Stefanowski', 'Jankowski', 'Piotrowski'];

$pracownicy = [];
for ($i = 0; $i < count($imiona); $i++) {
   $pracownik = new osoba();
   $pracownik->imie = $imiona[$i];
   $pracownik->nazwisko = $nazwiska[$i];
   array_push($pracownicy, $pracownik);
}

$json = json_encode($pracownicy);
echo $json;
