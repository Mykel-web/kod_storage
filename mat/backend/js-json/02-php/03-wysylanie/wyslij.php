<?php
class osoba
{
    public $imie, $nazwisko;
}
//generowanie danych wyjściowych jako obiektu JSON
header('Content-Type: application/json');
$czlowiek = new osoba(); //bez tego bedzie: Warning: Creating default object from empty value in ...
$czlowiek->imie = $_POST['imie'];
$czlowiek->nazwisko = $_POST['nazwisko'];
$czlowiek2 = new osoba(); //bez tego bedzie: Warning: Creating default object from empty value in ...
$czlowiek2->imie = $_POST['imie']."2";
$czlowiek2->nazwisko = $_POST['nazwisko']."2";
$osoby = [];
array_push($osoby, $czlowiek);
array_push($osoby, $czlowiek2);
$json = json_encode($osoby);
echo $json;
