<?php
//łączymy się z bazą
$connect = mysqli_connect('localhost','root','','kl3ag') or die("Problem z połączeniem z bazą");

//pobieramy dane z formularza
$location = $_POST['location'];


//definiujemy kwerendę
$sql = "INSERT INTO lokacja (nazwa) VALUES ('$location')";

//ustawiamy kodowanie utf8
mysqli_query($connect, "SET NAMES utf8");

//uruchamimy kwerendę
mysqli_query($connect, $sql) or die("Błędna kwerenda");
echo "Miejscowość $location została dodana do bazy";

//zamykamy połączenie z bazą
mysqli_close($connect);

