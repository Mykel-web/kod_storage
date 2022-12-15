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
            <h1 class="mt-2 mb-5">Podaj dane</h1>
            <a href="index.php" class="btn btn-warning mb-5">Wróć na stronę główną </a>
        </div>
        <div>
            <form action="create.php" method="post" class="text-white">
                <table class="table table-hover table-responsive table-dark border-top border-white">
                    <tr>
                        <td> Imię: </td>
                        <td> <input type="text" name="name" class="form-control" /> </td>
                    </tr>
                    <tr>
                        <td> Nazwisko: </td>
                        <td> <input type="text" name="surname" class="form-control" /> </td>
                    </tr>
                    <tr>
                        <td>Data urodzenia: </td>
                        <td> <input type="date" name="dateOfBirth" class="form-control" /> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <!-- my-1 margines top i bottom -->
                            <input type="submit" value="Zapisz" class="btn btn-warning my-1" />
                        </td>
                    </tr>
                </table>
                <?php
                if (isset($_POST['name'])) {
                    require_once('connect.php');
                    $connection = new mysqli($host, $user, $password, $database);
                    $name = $_POST['name'];
                    $surname = $_POST['surname'];
                    $dateOfBirth = $_POST['dateOfBirth'];
                    $sql = "INSERT INTO data (name, surname, dateOfBirth) VALUES ('$name','$surname', '$dateOfBirth')";
                    $connection->query($sql);
                    echo '<div class="alert alert-success"> Osoba ' . $name . ' ' . $surname . ' została dodana do bazy </div>';
                    $connection->close();
                }

                ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>