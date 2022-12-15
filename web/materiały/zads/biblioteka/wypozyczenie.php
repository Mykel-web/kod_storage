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
    <div id="kontener">
        <div id="left">
            <form action="wypozyczenie.php" method="POST">
                <h2>Wypożycz książke</h2> 
                Klient:
                <select name="klient">
                    <?php
                    $connect  = mysqli_connect('localhost', 'root', '', '4ag_biblioteka') or die("Problem z połaczeniem");
                    mysqli_query($connect, 'SET NAMES UTF8');
                    $sql = "SELECT id, Imie, nazwisko FROM klienci";
                    $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<option value = '$row[0]'> $row[1] $row[2] </option>";
                    }
                    mysqli_close($connect);
                    ?>
                </select>
                <br>
                Książka:
                <select name="ksiazka">
                    <?php
                    $connect  = mysqli_connect('localhost', 'root', '', '4ag_biblioteka') or die("Problem z połaczeniem");
                    mysqli_query($connect, 'SET NAMES UTF8');
                    $sql = "SELECT id, tytul FROM ksiazki";
                    $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<option value = '$row[0]'> $row[1] </option>";
                    }
                    mysqli_close($connect);
                    ?>
                </select>
                <br>
                <button type="submit">Wyślij</button>
            </form>

            <?php
            if (isset($_POST['klient'])) {
                $connect = mysqli_connect('localhost', 'root', '', '4ag_biblioteka');
                mysqli_query($connect, "SET NAMES utf8");

                $data_wypozyczenia = date('Y-m-d H:i:s');
                $data_oddania = date('Y-m-d', strtotime("+30 days"));
                $ksiazka_id = $_POST['ksiazka'];
                $klient_id = $_POST['klient'];
                $sql = "INSERT INTO wypozyczenia (id_klienta, id_ksiazki, data_wypozyczenia, data_oddania) VALUES ('$klient_id', '$ksiazka_id', '$data_wypozyczenia', '$data_oddania')";

                mysqli_query($connect, $sql) or die("Błędna kwerenda");
                echo "<br> Wypozyczenie zostało zapisane w bazie";

                mysqli_close($connect);
            }
            ?>
        </div>
        <div id="right">
            <?php

            $connect  = mysqli_connect('localhost', 'root', '', '4ag_biblioteka') or die("Problem z połaczeniem");
            mysqli_query($connect, 'SET NAMES UTF8');
            $sql = "SELECT ksiazki.tytul, autorzy.imie, autorzy.nazwisko
    FROM ksiazki INNER JOIN autorzy ON ksiazki.id_autora = autorzy.id";

            $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
            if (mysqli_num_rows($result) > 0) {
                echo "<h2>Dostepne książki:</h2>";
                echo "<ol id='ksiegi'>";
                while ($row = mysqli_fetch_row($result)) {
                    echo "<li>'<b>$row[0]</b> '$row[1] $row[2]</li>";
                }
                echo "</ol>";
            } else {
                echo "Nie ma książek";
            }
            mysqli_close($connect);
            ?></div>
    </div>
</body>

</html>