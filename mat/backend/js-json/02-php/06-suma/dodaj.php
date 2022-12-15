<?php
class s
{
    public $a, $b, $wynik;
}
//generowanie danych wyjściowych jako obiektu JSON
header('Content-Type: application/json');
$suma = new s(); //bez tego bedzie: Warning: Creating default object from empty value in ...
$suma->a = $_POST['a'];
$suma->b = $_POST['b'];
$suma->wynik = $suma->a + $suma->b;
$json = json_encode($suma);
echo $json;
