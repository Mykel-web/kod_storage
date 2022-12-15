<?php
$tab["imie"] ="Szymuś";
$tab["nazwisko"] ="Szymusiowski";
$tab["wiek"] = 21;

foreach($tab  as $element) echo $element." ";
echo "<br>";
foreach($tab  as  $key=>$element) echo "$key: $element <br>";