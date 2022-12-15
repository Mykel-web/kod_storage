<?php
    $pass = 'tajne';
    $hash1 = password_hash($pass, PASSWORD_DEFAULT);
    $hash2 = password_hash($pass, PASSWORD_DEFAULT);
    if (password_verify($pass, $hash1)) {
        echo "<b>$hash1</b> oznacza hasło <b>$pass</b> <br> ";
    } else {
        echo "Nie zgadza się <br> n";
    }
    if (password_verify($pass, $hash2)) {
        echo "<b>$hash2</b> oznacza hasło <b>$pass</b> <br>";
    } else {
        echo "Nie zgadza się <br>";
    }