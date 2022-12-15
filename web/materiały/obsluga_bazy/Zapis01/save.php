<?php
//łączymy się z bazą
$connect = mysqli_connect('localhost','root','','kl4ag') or die("Problem z połączeniem z bazą");

//pobieramy dane z formularza
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$location_id = $_POST['location_id'];
$bank_id = $_POST['bank_id'];
$amount = $_POST['amount'];

//definiujemy kwerendę SQL
$sql = "INSERT INTO dane (imie, nazwisko, data, id_lokacji, id_banku, stan_konta) VALUES ('$firstname','$lastname','$date', $location_id, $bank_id, $amount)";

//ustawiamy kodowanie utf8
mysqli_query($connect, "SET NAMES utf8");

//uruchamimy kwerendę
mysqli_query($connect, $sql) or die("Błędna kwerenda");
echo "$firstname $lastname został zapisany w bazie";

//zamykamy połączenie z bazą
mysqli_close($connect);

