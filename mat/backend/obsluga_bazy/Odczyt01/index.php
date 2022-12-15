<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Zawartość bazy</h2>
    <?php
    $connect  = mysqli_connect('localhost', 'root', '', 'kl3Ag') or die("Poroblem z połaczeniem");
    mysqli_query($connect, 'SET NAMES UTF8');
    $sql = "SELECT dane.imie, dane.nazwisko, dane.data, lokacja.nazwa
            FROM dane INNER JOIN lokacja
            ON dane.id_lokacji = lokacja.id";
    $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
    echo "<ol>";
    while($row = mysqli_fetch_row($result)){
        echo "<li> $row[0]  $row[1] urodzony $row[2], zamieszkały:  $row[3] </li>";
    }
    echo "</ol>";
    mysqli_close($connect)
    ?>
</body>

</html>