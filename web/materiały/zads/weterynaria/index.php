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
    <a id="a1" href="index.php">Lista hodowców</a>
    <a id="a2" href="2.php">Dodaj psa</a>
    <a id="a3" href="3.php">Lista psów</a>
    <a id="a4" href="4.php">Sczepienia po terminie</a>
    </nav>
    <main>
    <h1>Weterynaria</h1>
    <table>
        <tr><th>id</th><th>Imię</th><th>Nazwisko</th></tr>
        <?php
        require_once('baza.php');
        $connect = mysqli_connect($host, $user, $pass, $db);
        mysqli_query($connect, "SET NAMES UTF8");
        $result = mysqli_query($connect, "SELECT id, imie, nazwisko FROM wlasciciele");
        while($row = mysqli_fetch_row($result)){
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
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