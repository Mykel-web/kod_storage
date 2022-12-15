<?php
$tab = [1, 3, 4.5, "Ale je kota", 23];
for($i = 0; $i<count($tab); $i++){
    echo $tab[$i].' ';
}
echo '<br>';
array_push($tab, "Ala je sałatę", 45);
for($i = 0; $i<count($tab); $i++){
    echo $tab[$i].' ';
}
echo '<br>';
foreach($tab as $x)echo $x.' ';

