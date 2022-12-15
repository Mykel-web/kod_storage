<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
    <a href="index.php">Lista hodowców</a>
    <a href="2.php">Dodaj psa</a>
    <a href="3.php">Lista psów</a>
    <a href="4.php">Sczepienia po terminie</a>
    </nav>
    <main>
    <h1>Weterynaria</h1>
    <table>
        <tr><th>Id psa</th><th>Imię psa</th><th>Rasa</th><th>Data Szczepienia</th><th>Ilość dni po terminie</th><th>Właściciel</th></tr>
        <?php
        require_once('baza.php');
        $connect = mysqli_connect($host, $user, $pass, $db);
        mysqli_query($connect, "SET NAMES UTF8");
        $sql = "SELECT psy.id, psy.imie, rasy.nazwa, psy.data_szczepienia, dni_po_terminie, CONCAT(wlasciciele.imie, ' ', wlasciciele.nazwisko) FROM psy
        INNER JOIN wlasciciele ON psy.wlasciciel_id = wlasciciele.id INNER JOIN rasy ON psy.rasa_id = rasy.id
        INNER JOIN dane_szczepienia ON psy.id = dane_szczepienia.id";
        $result = mysqli_query($connect, $sql) or DIE("ZLE");
        while($row = mysqli_fetch_row($result)){
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
        }
        ?>
    </table>
    </main>
    <footer>
        Copyright: Michał Kosiorowski "Nie wiem co wpisać bo nic nie widze na tych zrzutach"
    </footer>
    <script src="script.js"></script>
</body>
</html>