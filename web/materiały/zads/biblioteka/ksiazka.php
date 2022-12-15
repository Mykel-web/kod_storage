<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once("menu.php")
    ?>
    <div id="kontener">
        <div id="left">
            <form action="ksiazka.php" method="POST">
                Dodaj ksiazke <br>
                <input type="text" name="name"> Tytul <br>
                <select name="id">
                    <?php
                    $connect  = mysqli_connect('localhost', 'root', '', '4ag_biblioteka') or die("Problem z połaczeniem");
                    mysqli_query($connect, 'SET NAMES UTF8');
                    $sql = "SELECT id, Imie, nazwisko FROM autorzy";
                    $result = mysqli_query($connect, $sql) or die("Błędna kwerenda");
                    while ($row = mysqli_fetch_row($result)) {
                        echo "<option value = '$row[0]'> $row[1] $row[2] </option>";
                    }
                    mysqli_close($connect);
                    ?>
                </select>
                <button type="submit">Wyślij</button>
            </form>

            <?php
            if (isset($_POST['name'])) {
                $connect = mysqli_connect('localhost', 'root', '', '4ag_biblioteka');
                mysqli_query($connect, "SET NAMES utf8");

                $name = $_POST['name'];
                $id = $_POST['id'];
                $sql = "INSERT INTO ksiazki (tytul, id_autora) VALUES ('$name', $id)";

                mysqli_query($connect, $sql) or die("Błędna kwerenda");
                echo "<br> Księga $name została zapisana w bazie";

                mysqli_close($connect);
            }
            ?>
        </div>
       
    </div>
</body>

</html>