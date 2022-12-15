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
$json = json_encode($czlowiek);
echo $json;
