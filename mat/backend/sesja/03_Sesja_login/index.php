<?php
session_start();
if (!isset($_SESSION['log'])) {
    header('location:02zaloguj.php'); // PRZEKIEROWANIE ZMIENIC WERSJE 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo "witaj ".$_SESSION['log'];
    ?><br>
    <a href="wyloguj.php">Wyloguj</a>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>