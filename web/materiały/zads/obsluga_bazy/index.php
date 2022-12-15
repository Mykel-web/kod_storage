<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="add_location.php">Dodaj nową lokację</a> <a href="add_bank.php">Dodaj nowy bank</a>
    <a href="result.php">Odczytaj dane</a>
    <form action="index.php" method="POST">
        <h2>Podaj dane</h2>
        Imię:<br><input type="text" name="firstname"><br>
        Nazwisko:<br><input type="text" name="lastname"><br>
        Data urodzenia:<br> <input type="date" name="date"><br>
        Id miejowości (od 1 do 9): <br> <input type="number" name="location_id"><br><br>
        Id banku: <br> <input type="number" name="bank_id"><br>
        Stan konta: <br> <input type="text" name="amount"> <br><br><br><br>
        <input type="submit" value="Wyślij">

    </form>

    <?php
    if (isset($_POST['firstname'])) {
        $connect = mysqli_connect('localhost', 'root', '', 'kl3ag') or die("Problem z połączeniem z bazą");

        //pobieramy dane z formularza
        //pobieramy dane z formularza
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $location_id = $_POST['location_id'];
        $bank_id = $_POST['bank_id'];
        $amount = $_POST['amount'];

        //definiujemy kwerendę SQL
        $sql = "INSERT INTO dane (imie, nazwisko, data, id_lokacji, id_banku, stan_konta) VALUES ('$firstname','$lastname','$date', $location_id, $bank_id, $amount)";


        //definiujemy kwerendę
        $sql = "INSERT INTO dane (imie, nazwisko, data, id_lokacji) VALUES ('$firstname','$lastname','$date', $location_id)";

        //ustawiamy kodowanie utf8
        mysqli_query($connect, "SET NAMES utf8");

        //uruchamimy kwerendę
        mysqli_query($connect, $sql) or die("Błędna kwerenda");
        echo "<br> $firstname $lastname został zapisany w bazie";

        //zamykamy połączenie z bazą
        mysqli_close($connect);
    }
    ?>
</body>

</html>