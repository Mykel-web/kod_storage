<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("menu.php")
?>
<div id="left">
    <form action="klient.php" method="POST">
    Dodaj klienta <br>
        <input type="text" name="name"> Imie        <br>
        <input type="text" name="lastname"> nazwisko        <br>
        <button type="submit">Wyślij</button>
    </form>
    <?php
    if (isset($_POST['name'])) {
        $connect = mysqli_connect('localhost', 'root', '', '4ag_biblioteka');
        mysqli_query($connect, "SET NAMES utf8");

        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $sql = "INSERT INTO klienci (imie, nazwisko) VALUES ('$name', '$lastname')";
    
        mysqli_query($connect, $sql) or die("Błędna kwerenda");
        echo "<br> Klient $name $lastname został zapisany w bazie";

        mysqli_close($connect);
    }
    ?>
    </div>
</body>
</html>