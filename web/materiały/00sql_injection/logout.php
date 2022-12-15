<?php
session_start();
if (isset($_SESSION['log'])) {
	session_destroy();
} else {
	header('location:login.php');
	exit();
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Koniec sesji</title>
</head>

<body>
	Wylogowałeś się!!<br />
	<a href="login.php">Zaloguj się</a>

</body>
</html>