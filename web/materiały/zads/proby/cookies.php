<?php
setcookie('wizyta', time(), time() + 60);
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
    powitac<br>
    <?php
    if(isset($_COOKIE['wizyta'])){
        $czas = date("Y-m-d h:i:s", $_COOKIE['wizyta']);
        echo "Ostatnia wizyta: ".$czas;
    }
    else{
        echo "piersza wizyta";
    }
    ?>
</body>
</html>