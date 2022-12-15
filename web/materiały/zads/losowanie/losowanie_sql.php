
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="losowanie_sql.php" method="post">
    Podaj ile osób wylosować: <br><input type="number" name="ilosc" value="1"><br>
    <button type="submit" name="losuj">Wylosuj</button>
    <button type="submit" name="reset">Zresetuj listę</button>
    </form>
    <br><p id="wynik">
        <?php
        $connect = mysqli_connect("localhost", "root", "", "4ag_losowanie");
        mysqli_query($connect, "SET NAMES UTF8");
        if(isset($_POST['losuj'])){
            $ilosc = $_POST['ilosc'];
            $sql = "SELECT * FROM dane order by rand() LIMIT $ilosc";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_row($result);
            echo "id: $row[0] <br>Imię: $row[1] <br>Nazwisko: $row[2] <br>";
            }
            ?>
    </p>
</body>

</html>