<?php
$imie = trim($_POST['imie']);
//generowanie danych wyjściowych
$dane = ['JAN', 'PIOTR', 'STEFAN'];

if (in_array(strtoupper($imie), $dane))     $komunikat = 'Witaj ' . ucfirst($imie) . '!';
else if ($imie== '')     $komunikat =  'Hej! Podaj swoje imię!';
else     $komunikat = ucfirst($imie) . ' nie znam Cię!!!';
// trim - usuwa białe, puste znaki z początku oraz końca ciągu
// ucfirst - pierwsza litera duża
//dane wysyłamy jako zwykły tekst
echo $komunikat;
