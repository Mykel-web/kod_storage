<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Powrót na stronę główną</a>
    <form action="add_location.php" method="POST">
        <h2>Podaj nazwę miejscowości</h2>
        Nazwa:<br><input type="text" name="location"><br>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
    <?php
    if (isset($_POST['location'])) { //łączymy się z bazą
        $connect = mysqli_connect('localhost', 'root', '', 'kl4ag') or die("Problem z połączeniem z bazą");

        //pobieramy dane z formularza
        $location = $_POST['location'];


        //definiujemy kwerendę
        $sql = "INSERT INTO lokacja (nazwa) VALUES ('$location')";

        //ustawiamy kodowanie utf8
        mysqli_query($connect, "SET NAMES utf8");

        //uruchamimy kwerendę
        mysqli_query($connect, $sql) or die("Błędna kwerenda");
        echo "<br>Miejscowość $location została dodana do bazy";

        //zamykamy połączenie z bazą
        mysqli_close($connect);
    }
    ?>
</body>

</html>