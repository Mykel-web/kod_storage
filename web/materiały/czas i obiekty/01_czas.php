<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Czas</title>
</head>
<body>
<?php 
    echo "<b>Funkcje time, microtime, mktime:</b><br/>";
    echo time()." - liczba sekund od godz. 00:00 01.01.1970 do teraz <br/>"; 
    echo microtime()." - liczba sekund od godz. 00:00 01.01.1970 do teraz ( z przodu ułamek ostatniej sekundy  do sześciu miejsc po przecinku)<br/>"; 
    echo mktime(23, 15, 0, 12, 15,  2019)." - liczba sekund od godz. 00:00 01.01.1970 do godz. 23:15:00 15.12.2019<br/><br/>"; 
    echo "<b>Funkcja date - przykłady:</b><br/>";
    echo date('Y-m')."<br/>";
    echo date('y:m')."<br/>";
    echo date('Y-m-d')."<br/>";
    echo date('Y-m-j')."<br/>";//dzień miesiaca bez zer wiodących 
    echo date('Y-M-D')."<br/>";//D - dzień tygodnia skrót
    echo date('Y-M-l')."<br/>";//D - dzień tygodnia - pełna nazwa
    echo '<b>'.date('Y-m-d H:i:s')." - fomat w MySQL </b><br/>";//i minuty  - fomat w MySQL, H- format 24 godzinny
    echo date('d.M.Y G:i:s')."<br/>";//G bez zer wiodących, - format 24 godzinny
    echo date('d l Y h:i:s')."<br/>";//H- format 12 godzinny z zerami wiodącymi
    echo date('d l Y g:i:s')."<br/>";//g -bez zer wiodących, - format 12 godzinny
    
?>
<br/><br/>
Wiecej na stronie: <a href="https://pl.wikibooks.org/wiki/PHP/Data_i_czas">https://pl.wikibooks.org/wiki/PHP/Data_i_czas</a>
</body>
</html>