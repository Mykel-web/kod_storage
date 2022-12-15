<?php
class osoba
{
	public  $imie, $nazwisko, $wiek;//public jest ustawieniem domyślnym
	
	function przypiszImie($arg1)
	{
		$this->imie=$arg1;
	}
	function zwrocImie()
	{
		return $this->imie;
	}
	function przypiszNazwisko($arg2)
	{
		$this->nazwisko=$arg2;
	}
	function zwrocNazwisko()
	{
		return $this->nazwisko;
	}
    function zwrocwiek()
	{
		return $this->wiek;
	}
}
$ktos1=new osoba();//obieky klasy osoba
$ktos2=new osoba; // można bez nawiasów

$ktos1->imie="Stefan";
$ktos1->nazwisko="Stefanowski";
$ktos1->wiek=20;

$ktos2->przypiszImie("Jan");
$ktos2->przypiszNazwisko("Jankowski");
$ktos2->wiek=40;

echo "Pierwsza osoba to $ktos1->imie $ktos1->nazwisko $ktos1->wiek<br/>";
echo "Druga osoba to ".$ktos2->zwrocImie()."  ". $ktos2->zwrocNazwisko()." wiek: ".$ktos2->zwrocwiek();//bez . nie działa 
?>