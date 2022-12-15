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
            <h1 class="mt-2 mb-5">Dane</h1>
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
            $connection = new mysqli($host, $user, $password, $database);
            //można dołożyć zabezpieczenia na wypadek, gdyby takiego id nie było
            $sql = "SELECT data.pesel,  data.name, data.surname, professions.name AS profName 
                    FROM data  INNER JOIN professions ON data.profession_id  = professions.id 
                    WHERE data.pesel = '$pesel'";
            $result = $connection->query($sql) ;
            if ($result->num_rows == 0) {
                echo '<div class="alert alert-danger"> Brak takiej osoby</div>';
                $connection->close();
                exit();
            }
            require_once('functions.php');
            echo '<table class="table table-hover table-responsive table-dark border border-white"> ';
            echo '<thead>
                        <tr>
                            <th class="border bg-secondary text-warning">Imię</th>
                            <th class="border bg-secondary text-warning">Nazwisko</th>
                            <th class="border bg-secondary text-warning">Pesel</th>
                            <th class="border bg-secondary text-warning">Data urodzenia</th>
                            <th class="border bg-secondary text-warning">Zawód</th>
                         </tr>
                         </thead>';
            echo '<tbody>';
            $record = $result->fetch_assoc();
            // print_r($record);
            extract($record);
            echo '<tr>
                    <td class="border">' . $name . '</td>
                    <td class="border">' . $surname . '</td>
                    <td class="border">' . $pesel . '</td>
                    <td class="border">' . dateOfBirth($pesel). '</td>
                    <td class="border">' . $profName . '</td>
                    </tr></tbody>';


            echo '</table>';
            echo '<a href="update.php?pesel='.$pesel.'" class = "btn btn-warning m-1"> Edytuj</a>';
            $result->close();

            $connection->close();
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>