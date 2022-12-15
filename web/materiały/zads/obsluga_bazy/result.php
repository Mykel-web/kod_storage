<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="result.php" method="POST">
        Wpisz nazwę banku: <input type="text" name="bank"><br><br>
        <input type="submit" value="OK">
    </form>


    <?php
    if (isset($_POST['bank'])) {

        $bank = $_POST['bank'];
        $connect  = mysqli_connect('localhost', 'root', '', 'kl4Ag') or die("Problem z połaczeniem");
        mysqli_query($connect, 'SET NAMES UTF8');
        $sql = "SELECT dane.imie, dane.nazwisko, dane.data, dane.stan_konta, bank.nazwa
                FROM dane INNER JOIN bank
                ON dane.id_banku = bank.id
                WHERE bank.nazwa = '$bank'";
        $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Zawartość bazy</h2>";
            echo "<ol>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li> {$row['imie']}  {$row['nazwisko']} urodzony {$row['data']}, bank:  {$row['nazwa']} posiada: {$row['stan_konta']}</li>";
            }
            echo "</ol>";
        }
        else{
            echo "Nic nie znalazłem!!";
        }
        mysqli_close($connect);
    }
    ?>
</body>

</html>