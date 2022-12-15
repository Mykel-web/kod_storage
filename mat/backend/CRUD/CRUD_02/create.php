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
                        <td> Pesel: </td>
                        <td> <input type="text" name="pesel" class="form-control" /> </td>
                    </tr>
                    <tr>
                        <td> Zawód: </td>
                        <td> 
                            <?php
                            require_once('connect.php');
                            $connection = new mysqli($host, $user, $password, $database);

                            echo '
                            <select class="form-control" name="profession_id" style="cursor:pointer">
                                <option>Wybierz zawód ...</option> ';
                            $sql = "SELECT id, name FROM professions";
                            $result = $connection->query($sql);
                            while ($record = $result->fetch_assoc()){
                                extract($record);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            
                            echo '</select>';
                            $connection->close();
                            ?>
                        </td>
                    </tr>
                   
                </table>
                <!-- my-1 margines top i bottom -->
                <input type="submit" value="Zapisz" class="btn btn-warning my-2"  />
                <?php
                if ($_POST) { 
                    
                    //htmlspecialchars konwertuje znaki specjalne (<, >, ', ", &) na encje HTML. jako drugi parametr można określić zestaw znaków.
                    //strip_tags opuszcza tagi HTML, jaki drugi parametr można ustawić wyjątek
                    $name = htmlspecialchars(strip_tags($_POST['name']));
                    $surname = htmlspecialchars(strip_tags($_POST['surname']));
                    $pesel = htmlspecialchars(strip_tags($_POST['pesel']));
                    $profession_id = $_POST['profession_id'];
                    require_once('functions.php');
                    
                    if(peselOk($pesel)){
                        $connection = new mysqli($host, $user, $password, $database);
                        if(peselInBase($pesel, $connection)>0){
                            echo '<div class="alert alert-danger"> Pesel '.$pesel.' jest już w bazie!</div>';   
                        }
                        else {
                            $sql = "INSERT INTO data (pesel, name, surname, profession_id) VALUES ('$pesel','$name','$surname','$profession_id')";
                            $connection->query($sql);
                            echo '<div class="alert alert-success"> Osoba ' . $name . ' ' . $surname . ' została dodana do bazy </div>'; 
                        }
                        $connection->close();
                    }
                    else {
                        echo '<div class="alert alert-danger"> Numer pesel nie jest poprawny </div>';
                    }
                }

                ?>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>