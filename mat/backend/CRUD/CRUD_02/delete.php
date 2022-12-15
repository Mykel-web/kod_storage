
<?php
    if (isset($_GET['pesel'])) {
        $pesel = $_GET['pesel'];
    } else {
        header('Location: index.php?delete=error1');
        exit();
    }
    require_once('connect.php');
    $connection = new mysqli($host, $user, $password, $database);
    // sprawdzamy, czy jest takie id
    $sql="SELECT *  FROM data WHERE pesel = '$pesel'";
    $result = $connection->query($sql);
    if($result->num_rows > 0){
        // delete zadziała poprawnie  nawet, gdy nic nie usunie
        $sql="DELETE FROM data WHERE pesel = '$pesel'";
        $connection->query($sql);
        $connection->close();
        header('Location: index.php?delete=success');
    }
    
    else{
        $connection->close();
        header('Location: index.php?delete=error2');
    }
    