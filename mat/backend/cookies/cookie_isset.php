<?php
if (isset($_COOKIE['ilosc'])){
    $ile = $_COOKIE['ilosc'] + 1;
}
else{
    $ile = 1;
}
setcookie('ilosc', $ile);
//czas

setcookie('czas', time());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Odwiedzasz strone po raz <br>
    <?php
        echo $ile;
        if(isset($_COOKIE['czas'])){
        echo "<br>Ostatnia wizyta:<br>";
        echo date('Y-m-d h:i:s',$_COOKIE['czas']);}

    ?>
</body>
</html>