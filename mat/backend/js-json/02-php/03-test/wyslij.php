<?php
header('Content-Type: application/json');
class obiekt{
    public $name;
    public $value;
}
$obiekty = [];
$obiekt1 = new obiekt();
$obiekt1->name=$_POST['name'];
$obiekt1->value=$_POST['value'];
$obiekt2 = new obiekt();
$obiekt2->name=$_POST['name'].'2';
$obiekt2->value=$_POST['value'].'2';
array_push($obiekty, $obiekt1);
array_push($obiekty, $obiekt2);
$json_array = json_encode($obiekty);
echo $json_array;