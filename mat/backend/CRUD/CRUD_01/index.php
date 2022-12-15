<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body class="text-white  bg-dark">
    <div class="container">
        <div class="page-header">
            <!-- mt margines top , mb - bottom-->
            <h1 class="mt-2 mb-5">Lista osób</h1>
            <a href="create.php" class="btn btn-warning mb-5">Dodaj nową osobę do bazy </a>
        </div>
        <div>
            <?php
            if (isset($_GET['delete'])) {
                $message = $_GET['delete'];
            } else {
                $message = '';
            }
            require_once('connect.php');
            $connection = new mysqli($host, $user, $password, $database);
            $sql = 'SELECT id, name, surname, dateOfBirth FROM data';
            $result = $connection->query($sql);
            if ($result->num_rows == 0) {
                echo '<div class="alert alert-danger"> Brak rekordów w bazie</div>';
            } else {
                echo '<table class="table table-hover table-responsive table-dark border border-white"> ';
                echo '<thead>
                        <tr>
                            <th class="border bg-secondary text-warning">id</th>
                            <th class="border bg-secondary text-warning">Imię</th>
                            <th class="border bg-secondary text-warning">Nazwisko</th>
                            <th class="border bg-secondary text-warning"></th>
                         </tr>
                         </thead>';
                echo '<tbody>';
                while ($record = $result->fetch_assoc()) {
                    extract($record);
                    echo '<tr>
                            <th class="border">' . $id . '</th>
                            <td class="border">' . $name . '</td>
                            <td class="border">' . $surname . '</td>
                            <td>
                                <a href="show.php?id=' . $id . '" class = "btn btn-info m-1"> Pokaż</a> 
                                <a href="update.php?id=' . $id . '" class = "btn btn-warning m-1"> Edytuj</a> 
                                <a href="#" onclick="deletePerson(' . $id . ');" class = "btn btn-danger m-1"> Usuń </a> 
                            </td>
                        </tr>';
                }
                echo '</tbody>';
                echo '</table>';
                $result->close();
            }
            $connection->close();
            if ($message == 'error1') {
                echo '<div class="alert alert-danger"> Coś poszło nie tak</div>';
            } else if ($message == 'error2') {
                echo '<div class="alert alert-danger"> Nie ma takiego id</div>';
            } else if ($message == 'success') {
                echo '<div class="alert alert-success"> Wybrana osoba została pomyślnie skasowana </div>';
            }

            ?>
            <table>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
        function deletePerson(id) {
            var answer = confirm('Czy jesteś pewien?');
            if (answer) {
                window.location = 'delete.php?id=' + id;
            }
        }
    </script>

</body>

</html>