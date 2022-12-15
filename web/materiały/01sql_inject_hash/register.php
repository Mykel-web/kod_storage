<?php
echo "<p class='red'>";
session_start();
if (isset($_SESSION['log'])) {
	header('location:index.php');
	exit();
}
if (isset($_POST['user']) && $_POST['pass'] == $_POST['pass2']) {
	require_once('connect.php');
	$connect = new mysqli($host, $user, $pass, $db);
	$connect->query('SET NAMES utf8');
	$login = $connect->real_escape_string($_POST['user']);
	$pass = $connect->real_escape_string($_POST['pass']);
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	$users = $connect->query("SELECT user FROM dane WHERE user = '$login'");
	if ($users->num_rows > 0) {
		echo "$login uzytkownik juz jest";
		session_destroy();
	} else {
		echo "zarejestrowano $login";
		$sql = "INSERT INTO dane (id, user, pass, img) VALUES (NULL, '$login', '$hash', 'kot.gif')";
		$connect->query($sql);
	}
	$connect->close();
} else {
	echo "podaj poprawne dane";
	session_destroy();
}
echo "</p>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Autoryzacja</title>
	<link rel="stylesheet" href="style.css">
</head>
<body><div>
	Zarejestruj się<br />
	<form action="register.php" method="post">
		Login:<br /> <input type="text" name="user" /> <br /><br />
		Hasło:<br /> <input type="password" name="pass" /> <br /><br />
		Powtórz Hasło:<br /> <input type="password" name="pass2" /> <br /><br />
		<input type="submit" value="REJESTRUJ" />
	</form>
	<a href="login.php">Zaloguj się</a></div>
</body>
</html>