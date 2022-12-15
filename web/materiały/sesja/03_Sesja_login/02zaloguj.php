<?php
session_start();
if(isset($_SESSION['log'])){
    header("location:index.php");
    exit();
}
else if(isset($_POST['login'])){
    $names = ['jasio', 'czesio', 'zdzisio'];
    $passwords = ['tajne', 'tajne', 'tajne'];
    for($i = 0; $i < count($names); $i++){
        if(strtoupper($names[$i]) == strtoupper($_POST['login']) && $passwords[$i] == $_POST['password']){
            $_SESSION['log'] = $names[$i];
            $_SESSION['password'] = $passwords[$i];
            header('location:index.php');
            exit();
        }
    }
}
else{
    echo "podaj dane logowania";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><!--action ZMIENIC WERSJE -->
    <form action="02zaloguj.php" method="POST"> 
    Zaloguj się <br>
    Login <input type="text" name="login"><br>
    hasło <input type="password" name="password"><br>
    <button type="submit">Loguj</button>
    </form>
</body>
</html>