<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td, th{
            border: solid 2px black;
            padding: 5px;
        }
    </style>
</head>
<body>
    Odczyt z bazy:
    <?php
    echo "<table><tr><td>klient</td><td>ksiazka</td><td>data oddania</td></tr>";
    //polaczenie
    $connect = mysqli_connect("localhost", "root", "", "4ag_biblioteka");
    mysqli_query($connect, "SET NAMES UTF8");
    $sql = "SELECT klienci.Imie, ksiazki.tytul, wypozyczenia.data_oddania
    FROM wypozyczenia
    INNER JOIN klienci ON wypozyczenia.id_klienta = klienci.Id
    INNER JOIN ksiazki ON wypozyczenia.id_ksiazki = ksiazki.Id";
    $query = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_row($query)){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>