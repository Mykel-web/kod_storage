<?php

$nick = strtoupper($_POST['nick']);
require_once('polaczenie.php');
$polaczenie = new mysqli($host, $user, $pass, $db);

$wynik = $polaczenie->query("SELECT nick, imie, nazwisko FROM osoby WHERE nick='$nick'");
$dane = $wynik->fetch_assoc();
$polaczenie->close();
//dane wysyłamy jako zwykły tekst
if ($dane) {
	if (in_array($nick, $dane)) {
		echo 'Witam Cię ' . $dane['imie'] . ' ' . $dane['nazwisko'];
	}
} else if (trim($nick) == '') 	echo 'Hej! Podaj swój nick!';
else 	echo $nick. ' nie znam Cię!!!';


// trim - usuwa białe, puste znaki z początku oraz końca ciągu
