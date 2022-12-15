<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="zapis4.php" method="POST">
        <h2>Podaj dane</h2>
        Imię:<br><input type="text" name="firstname"><br>
        Nazwisko:<br><input type="text" name="lastname"><br>
        Data urodzenia:<br> <input type="date" name="date"><br>
        Miejscowość: <br> 
        <select name="location">
        <?php
                require_once('database.php');
                //połączenie wersja obiektowa
                $connection = new mysqli($host,$user,$password,$database);
                $connection->query("SET NAMES UTF8");
                $sql = "SELECT id, nazwa FROM lokacja";
                $result = $connection->query($sql);
                while($row =$result->fetch_row()){
                    echo "
                    <option value='$row[0]'> $row[1]</option>
                    ";
                }
                $connection->close();
            ?>
        </select>
        <br>
        Bank: <br> 
        <select name ="bank">
            <?php
            //połączenie wersja obiektowa
            $connection = new mysqli($host,$user,$password,$database);
            $connection->query("SET NAMES UTF8");
                $sql = "SELECT id, nazwa FROM bank";
                $result = $connection->query($sql);
                while($row = $result->fetch_row()){
                    echo "
                    <option value='$row[0]'> $row[1]</option>
                    ";
                }
                $connection->close();
            ?>
        </select>
        <br>
        Stan konta: <br> <input type="text" name="amount"><br><br><br><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php
    if (isset($_POST['firstname'])) {
         //połączenie wersja obiektowa
        $connection = new mysqli($host,$user,$password,$database);
        $connection->query("SET NAMES UTF8");
        //pobieramy dane z formularza
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $date = $_POST['date'];
        $location_id = $_POST['location'];
        $bank_id = $_POST['bank'];
        $amount = $_POST['amount'];

        //definiujemy kwerendę
        $sql = "INSERT INTO dane (imie, nazwisko, data, id_lokacji, id_banku, stan_konta) VALUES ('$firstname','$lastname','$date', $location_id, $bank_id, $amount)";
        //uruchamimy kwerendę
        $result = $connection->query($sql);
        echo "<br> $firstname $lastname został zapisany w bazie";

        //zamykamy połączenie z bazą
        $connection->close();
    }
    ?>
</body>
</html>