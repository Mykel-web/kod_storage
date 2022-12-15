<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj do bazy</title>
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
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                echo '<div class="alert alert-danger"> Coś poszło nie tak</div>';
                exit();
            }
            require_once('connect.php');
            $connection = new mysqli($host, $user, $password, $database);
            if (!$_POST) {
                $sql = "SELECT name, surname, dateOfBirth FROM data WHERE id=$id";
                $result = $connection->query($sql);
                if ($result->num_rows == 0) {
                    echo '<div class="alert alert-danger"> Brak takiego id</div>';
                    exit();
                }
                $record = $result->fetch_assoc();
                extract($record);
                $result->close();
            } else {
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $dateOfBirth = $_POST['dateOfBirth'];
                $sql = "UPDATE data SET name = '$name', surname = '$surname', dateOfBirth ='$dateOfBirth' WHERE id = $id";
                $connection->query($sql);
                echo '<div class="alert alert-success"> Dane zauktualizowane </div>';
            }

            $connection->close();

            ?>

            <form action="update.php?id=<?php echo $id ?>" method="post" class="text-white">
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
                        <td>Data urodzenia: </td>
                        <td> <input type="date" name="dateOfBirth" class="form-control" value="<?php echo $dateOfBirth ?>" /> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <!-- my-1 margines top i bottom -->
                            <input type="submit" value="Zapisz zmiany" class="btn btn-warning my-1" />
                        </td>
                    </tr>
                </table>
                
            </form>






        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>