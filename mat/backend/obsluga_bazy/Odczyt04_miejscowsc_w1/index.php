<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="POST">
        Wpisz nazwę miejscowści: <input type="text" name="location"><br><br>
        <input type="submit" value="OK">
    </form>


    <?php
    if (isset($_POST['location'])) {

        $location = $_POST['location'];
        $connect  = mysqli_connect('localhost', 'root', '', 'kl3Ag') or die("Problem z połaczeniem");
        mysqli_query($connect, 'SET NAMES UTF8');
        $sql = "SELECT dane.imie, dane.nazwisko, dane.data, lokacja.nazwa
                FROM dane INNER JOIN lokacja
                ON dane.id_lokacji = lokacja.id
                WHERE lokacja.nazwa = '$location'";
        $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Zawartość bazy</h2>";
            echo "<ol>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li> {$row['imie']}  {$row['nazwisko']} urodzony {$row['data']}, zamieszkały:  {$row['nazwa']} </li>";
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