<?php
//stripslashes - usuwa backslash \ , czyści dane
//file_get_contents - zwraca plik jako plik do ciąg znaków
//php://input - strumień tylko do odczytu, który umożliwia odczyt surowych danych z treści żądania
$czlowiek = json_decode(stripslashes(file_get_contents("php://input")));
//generowanie danych wyjściowych jako obiektu JSON
header('Content-Type: application/json');
$json = json_encode($czlowiek);
echo $json;
