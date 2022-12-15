<?php
$tab = [2,3,-4,5,-67, 34, -23, 45, -78];
foreach($tab as $x) echo $x.' ';
echo "<br>";
sort($tab);
foreach($tab as $x) echo $x.' ';

echo "<br><br>";
$text =["Ala je zielonego kalfiora","Ala je zupę",  "Ala je rzepę"];
foreach($text as $x) echo $x.' ';
echo "<br>";
sort($text);
foreach($text as $x) echo $x.' ';