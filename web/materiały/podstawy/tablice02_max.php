<?php
$tab = [-23, 23, 45, -245, 234, 2355, 34];
$max = $tab[0];
for($i=1; $i<count($tab); $i++){
    if($tab[$i]>$max){
        $max=$tab[$i];
    }
}
echo $max;