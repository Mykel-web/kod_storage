<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktualizacja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body class="text-white  bg-dark">
    <div class="container">
        <div class="page-header">
            <!-- mt margines top , mb - bottom-->
            <h1 class="mt-2 mb-5">Zmień dane</h1>
            <a href="index.php" class="btn btn-warning mb-5">Wróć na stronę główną </a>
        </div>

        <div>
            <?php
            if (isset($_GET['pesel'])) {
                $pesel = $_GET['pesel'];
            } else {
                echo '<div class="alert alert-danger"> Coś poszło nie tak</div>';
                exit();
            }
            require_once('connect.php');
            require_once('functions.php');
            $connection = new mysqli($host, $user, $password, $database);
            if (!$_POST) {
                $sql = "SELECT pesel, name, surname, profession_id FROM data WHERE pesel = $pesel";
                $result = $connection->query($sql);
                if ($result->num_rows == 0) {
                    echo '<div class="alert alert-danger"> Brak takiej osoby</div>';
                    exit();
                }
                $record = $result->fetch_assoc();
                extract($record);
                $result->close();
            } else {
                $name = htmlspecialchars(strip_tags($_POST['name']));
                $surname = htmlspecialchars(strip_tags($_POST['surname']));
                $peselNew = htmlspecialchars(strip_tags($_POST['pesel']));

                $profession_id = $_POST['profession_id'];
                if (peselOk($peselNew)) {
                    if (peselInBase($peselNew, $connection) > 1) {
                        //Jeśli jeden to jest adres sprawdzany
                        echo '<div class="alert alert-danger"> Pesel ' . $peselNew . ' jest już w bazie!</div>';
                    } else {
                        $sql = "UPDATE data SET pesel ='$peselNew', name = '$name', surname = '$surname',  profession_id = $profession_id  WHERE pesel = '$pesel'";
                        $connection->query($sql);
                        echo '<div class="alert alert-success"> Dane zauktualizowane </div>';
                        $pesel = $peselNew;
                    }
                } else {
                    echo '<div class="alert alert-danger"> Numer pesel nie jest poprawny </div>';
                }
            }

            $connection->close();

            ?>

            <form action="update.php?pesel=<?php echo $pesel ?>" method="post" class="text-white">
                <table class="table table-hover table-responsive table-dark border-top border-white">
                    <tr>
                        <td> Imię: </td>
                        <td> <input type="text" name="name" class="form-control" value="<?php echo $name ?>" /> </td>
                    </tr>
                    <tr>
                        <td> Nazwisko: </td>
                        <td> <input type="text" name="surname" class="form-control" value="<?php echo $surname ?>" /> </td>
                    </tr>
                    <tr>
                        <td>Pesel: </td>
                        <td> <input type="text" name="pesel" class="form-control" value="<?php echo $pesel ?>" /> </td>
                    </tr>
                    <tr>
                        <td> Zawód: </td>
                        <td>
                            <?php
                            require_once('connect.php');
                            $connection = new mysqli($host, $user, $password, $database);

                            echo '
                            <select class="form-control" name="profession_id" style="cursor:pointer">';
                            $sql = "SELECT id, name FROM professions";
                            $result = $connection->query($sql);
                            while ($record = $result->fetch_assoc()) {
                                extract($record);
                                echo '<option value="' . $id . '" ';
                                if ($id == $profession_id) echo 'selected';
                                echo ' >' . $name . '</option>';
                            }

                            echo '</select>';
                            $connection->close();
                            ?>
                        </td>
                    </tr>
                </table>
                <!-- my-1 margines top i bottom -->
                <input type="submit" value="Zapisz zmiany" class="btn btn-warning my-1" />

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>