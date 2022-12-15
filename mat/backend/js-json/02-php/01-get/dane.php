<?php
header('Content-Type: application/json');
class osoba
{
   public $imie, $nazwisko, $stankonta;
}

//pierwsza osoba
$p1 = new osoba();
$p1->imie = 'Stefan';
$p1->nazwisko = 'Stefanowski';
$p1->stankonta = 100;

//druga osoba
$p2 = new osoba();
$p2->imie = 'Jan';
$p2->nazwisko = 'Jankowski';
$p2->stankonta = 150;

//trzecia osoba
$p3 = new osoba();
$p3->imie = 'Piotr';
$p3->nazwisko = 'Piotrowski';
$p3->stankonta = 200;

$pracownicy = array($p1, $p2, $p3);

$json = json_encode($pracownicy);
echo $json;
