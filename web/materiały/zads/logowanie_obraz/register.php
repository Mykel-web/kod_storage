<?php
session_start();
unset($_SESSION['error']);
unset($_SESSION['message']);
if(isset($_POST['login'])){ 
    $login = $_POST['login'];
    require_once('connect.php');
    $connect = new mysqli($host, $user,$pass,$db);
    $connect->query("SET NAMES UTF8");
    $sql = "SELECT user FROM dane WHERE user = '$login'";
    $result = $connect->query($sql);
    if($result->num_rows>0){
        $_SESSION['error']="Taki użytkownik już istnieje!!!";
    }
    else{ 
        // sprawdzenie hasel
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];
        if($pass1!=$pass2){
            $_SESSION['error']="Hasła nie są takie same!!!";
        }
        else{ 
            // rejestracja
            $katalog="./img/";
            $maxRozmiar = $_POST['maxRozmiar'];
            $nazwa = $_FILES['plik']['name'];
            $obrazy = array("image/jpeg","image/png","image/gif","image/bmp");
            if(is_uploaded_file($_FILES['plik']['tmp_name'])){
                if($_FILES['plik']['size'] > $maxRozmiar){
                    echo "Plik za duży";
                }
                else{
                    if(isset($_FILES['plik']['type'])){
                        $typ = $_FILES['plik']['type'];
                        if(in_array($typ, $obrazy)){
                            move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$nazwa);
                        }
                        else{
                            echo "zły format pliku";
                        }
                    }
                }
            }
            $hash = password_hash($pass1,PASSWORD_DEFAULT);
            $sql = "INSERT INTO dane (user, pass, img) VALUES ('$login','$hash', '$nazwa')";
            $connect->query($sql);
            $_SESSION['message'] = "Użytkownik $login został dopisany do bazy".' <br/>Obraz:<br><img src="'.$katalog.$nazwa.'" width="200"/>';
        }
    }
    $connect->close()
;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form enctype="multipart/form-data" action="register.php" method="POST">
        Login:<br>
        <input type="text" name="login"><br><br>
        Hasło:<br>
        <input type="password" name="pass1"><br>
        Powtórz hasło:<br>
        <input type="password" name="pass2"><br>
        Wybierz obraz:
        <input type="hidden" name="maxRozmiar" value="2000000">
        <input type="file" name="plik" size="50"><br>
        <input type="submit" value="Zarejestruj">

    </form><br>
    <a href="login.php">Strona logowania</a>
    <p class="error">
		<?php
		if (isset($_SESSION['error'])) echo $_SESSION['error'];
		?>
	</p>
    <p class="message">
		<?php
		if (isset($_SESSION['message'])) echo $_SESSION['message'];
		?>
	</p>

</body>

</html>