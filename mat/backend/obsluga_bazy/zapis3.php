<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="zapis3.php" method="POST">
        <h2>Podaj dane</h2>
        Imię:<br><input type="text" name="firstname"><br>
        Nazwisko:<br><input type="text" name="lastname"><br>
        Data urodzenia:<br> <input type="date" name="date"><br>
        Miejscowość: <br> 
        <select name="location">
            <?php
                $connection = mysqli_connect('localhost','root','','kl3ag');
                mysqli_query($connection, "SET NAMES UTF8");
                $sql = "SELECT id, nazwa FROM lokacja";
                $result = mysqli_query($connection, $sql);
                while($row = mysqli_fetch_row($result)){
                    echo "
                    <option value='$row[0]'> $row[1]</option>
                    ";
                }
                mysqli_close($connection);
            ?>
        </select>
        <br>
        Bank: <br> 
        <select name ="bank">
            <?php
                $connection = mysqli_connect('localhost','root','','kl3ag');
                mysqli_query($connection, "SET NAMES UTF8");
                $sql = "SELECT id, nazwa FROM bank";
                $result = mysqli_query($connection, $sql);
                while($row = mysqli_fetch_row($result)){
                    echo "
                    <option value='$row[0]'> $row[1]</option>
                    ";
                }
                mysqli_close($connection);
            ?>
        </select>
        <br>
        Stan konta: <br> <input type="text" name="amount"><br><br><br><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php
    if (isset($_POST['firstname'])) {
        $connect = mysqli_connect('localhost', 'root', '', 'kl3ag') or die("Problem z połączeniem z bazą");

        //pobieramy dane z formularza
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $location_id = $_POST['location'];
        $bank_id = $_POST['bank'];
        $amount = $_POST['amount'];

        //definiujemy kwerendę
        $sql = "INSERT INTO dane (imie, nazwisko, data, id_lokacji, id_banku, stan_konta) VALUES ('$firstname','$lastname','$date', $location_id, $bank_id, $amount)";

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