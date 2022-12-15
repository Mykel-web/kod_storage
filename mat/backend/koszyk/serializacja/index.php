<?php
$tablica= array ( 'Jacek', 67,'Jan', 56.9, true, '1');
$tablicaSerializowana= serialize($tablica);//serializacja tablicy
$tablicaDeSerializowana= unserialize($tablicaSerializowana); #deserializaja
echo "Przed serializacją: <b>";
print_r($tablica);
echo"</b><br/><br/>";
echo "Po serializacji:<b> $tablicaSerializowana </b><br/><br/>";
echo "Po deserializacji: <b>";
print_r($tablicaDeSerializowana);
echo"</b>";
?>