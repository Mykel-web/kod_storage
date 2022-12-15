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
    <?php
    require_once('baza.php');
    $connect = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($connect, "SET NAMES UTF8");
    
    ?>
    <nav>
    <a href="index.php">Lista hodowców</a>
    <a href="2.php">Dodaj psa</a>
    <a href="3.php">Lista psów</a>
    <a href="4.php">Sczepienia po terminie</a>
    </nav>
    <main>
    <h1>Weterynaria</h1>
    <br>
    <form action="2.php" method="post">
    Imię psa:
    <input type="text" name="imie">
    Właściciel:
    <select name="wlasciciel">
    <?php // Wybór właściciela
    $result = mysqli_query($connect, "SELECT id, dane FROM dane_wlascicieli");
    while ($row = mysqli_fetch_row($result)){
        echo "<option value='$row[0]'>$row[1]</option>";
    }

    ?>
    </select>
    Rasa:
    <select name="rasa">
    <?php // Wybór rasy
    $result = mysqli_query($connect, "SELECT id, nazwa FROM rasy");
    while ($row = mysqli_fetch_row($result)){
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    ?>
    </select>
    Data szczepienia:
    <input type="date" name="data">
    <button type="submit">Dodaj</button>
    </form>
        <?php
        if(isset($_POST['data']) && isset($_POST['wlasciciel']) && isset($_POST['imie']) && isset($_POST['rasa'])){
        $imie = $_POST['imie'];
        $wlasciciel = $_POST['wlasciciel'];
        $rasa = $_POST['rasa'];
        $data = $_POST['data'];
        $sql = "INSERT INTO psy (id, imie, wlasciciel_id, rasa_id, data_szczepienia) VALUES (NULL, '$imie', $wlasciciel, $rasa, '$data')";
        $result = mysqli_query($connect, $sql) or DIE("ZLE");
        }
        ?>
    </main>
    <footer>
    Copyright: Michał Kosiorowski "Nie wiem co wpisać bo nic nie widze na tych zrzutach"
    </footer>
    <script src="script.js"></script>
</body>
</html>