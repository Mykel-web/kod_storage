<?php
session_start();
if(isset($_SESSION['log'])){
    header("location:index.php");
    exit();
}
else if(isset($_POST['login'])){
    if($_POST['login'] == 'stefan' && $_POST['password'] == 'tajne'){
        $_SESSION['log'] = 'login';
        header('location:index.php');
        exit();
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
<body>
    <form action="01zaloguj.php" method="POST">
    Zaloguj się <br>
    Login <input type="text" name="login"><br>
    hasło <input type="password" name="password"><br>
    <button type="submit">Loguj</button>
    </form>
</body>
</html>