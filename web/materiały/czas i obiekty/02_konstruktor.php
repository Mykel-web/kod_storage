<?php
class osoba
{
	public  $imie, $nazwisko;
	
	function __construct($wiek_a) 
	{
		echo "Tworzymy osobę<br/>";
		$this->imie="Marek";
		$this->nazwisko="Marecki";
        $this->wiek = $wiek_a;
	}	
}
$ktos1=new osoba(20);
$ktos2=new osoba(30);

$ktos2->imie="Jan";
$ktos2->nazwisko="Jankowski";

echo "Pierwsza osoba to $ktos1->imie $ktos1->nazwisko $ktos1->wiek<br/>";
echo "Druga osoba to $ktos2->imie $ktos2->nazwisko $ktos2->wiek<br/>";

?>