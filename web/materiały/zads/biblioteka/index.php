<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            background-color: orange;
        }
    </style>
</head>

<body>
    <?php
    require_once("menu.php")
    ?>
    <div id="kontener">
        <div id="left">
            <?php
            require_once('connect.php');
            $connect  = mysqli_connect($host, $user, $password, $database) or die("Problem z połaczeniem");
            mysqli_query($connect, 'SET NAMES UTF8');
            $sql = "SELECT klienci.imie, klienci.nazwisko, ksiazki.tytul, wypozyczenia.data_wypozyczenia, wypozyczenia.data_oddania, autorzy.imie
            FROM wypozyczenia
            INNER JOIN klienci ON wypozyczenia.id_klienta = klienci.id
            INNER JOIN ksiazki ON wypozyczenia.id_ksiazki = ksiazki.id
            INNER JOIN autorzy ON ksiazki.id_autora = autorzy.id";


            $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Aktualne Wypożyczenia:</h2>";
                echo "<table>";
                echo "<tr style='background-color:yellow'><th>Imię</th><th>Nazwisko</th><th>Książka</th><th>Autor</th><th>Termin oddania</th></tr>";
                while ($row = mysqli_fetch_row($result)) {
                    echo "<tr>
        <td><b>$row[0]</b></td>
         <td><b>$row[1]</b></td>
          <td>'$row[2]'</td>
          <td>$row[5]</td>
           <td>$row[4]</td>

        </tr>";
                }
                echo "</table>";
            } else {
                echo "Nie ma wypozyczen";
            }
            mysqli_close($connect);
            ?>
        </div>

    </div>
</body>

</html>