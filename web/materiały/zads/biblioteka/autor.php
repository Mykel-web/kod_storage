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
    <div id="left">
        <form action="autor.php" method="POST">
            Dodaj autora <br>
            <input type="text" name="name"> Imie <br>
            <input type="text" name="lastname"> nazwisko <br>
            <button type="submit">Wyślij</button>
        </form>
        <?php
        if (isset($_POST['name'])) {
            //polaczenie
            $connect = mysqli_connect('localhost', 'root', '', '4ag_biblioteka');
            mysqli_query($connect, "SET NAMES utf8");

            // prepare and bind
            $sql = $connect->prepare("INSERT INTO autorzy (imie, nazwisko) VALUES (?, ?)");
            $sql->bind_param("ss", $firstname, $lastname);

            // set parameters and execute
            $firstname = htmlspecialchars(strip_tags($_POST['name']));
            $lastname = htmlspecialchars(strip_tags($_POST['lastname']));
            $sql->execute();

            echo "Dodano autora";
            $sql->close();
            $connect->close();
        }

        ?>
    </div>
</body>

</html>