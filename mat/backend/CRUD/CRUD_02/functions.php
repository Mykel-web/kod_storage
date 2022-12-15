<?php
//sprawdzenie, czy pesel jest poprawny
function peselOk($s)
{
    if (strlen($s) != 11) return false;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] < '0' || $s[$i] > '9') return false;
    }
    $digits = substr($s, 0); //rozbijamy $s na cyfry
    $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
    $checksum = 0;
    for ($i = 0; $i < 10; $i++) {
        $checksum += $digits[$i] * $weights[$i];
    }
    $checkdigit = $checksum % 10;
    $checkdigit = 10 - $checkdigit;
    $checkdigit %= 10;
    if ($checkdigit == $digits[10]) return true;
    return false;
}
//przeliczenie nr pesel na datę urodzenia
function dateOfBirth($s)
{
    if (peselOk($s)) {
        $year = 1900 + $s[0] * 10 + $s[1];
        $month = 0;
        if ($s[2] == '8') $year -= 100;
        else if ($s[2] == '2' || $s[2] == '3') $year += 100;
        else if ($s[2] == '4' || $s[2] == '5') $year += 200;
        else if ($s[2] == '6' || $s[2] == '7') $year += 300;
        if ($s[2] % 2 != 0) $month += 10; //1,3,5,7
        $month += $s[3];
        $day = $s[4] * 10 + $s[5];
        // echo "$year - $month -  $day\n"; //do testów
        return date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
    } else return 'Błędny pesel';
}
// echo dateOfBirth('91091972125'); //do testów

//sprawdzenie ilości wystąpień w bazie
function peselInBase($s, $con){
    $sql = "SELECT pesel FROM data WHERE pesel = '$s'";
    $result = $con->query($sql);
    return $result->num_rows;

}