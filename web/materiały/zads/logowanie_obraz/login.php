<?php
session_start();
if (isset($_SESSION['log'])) {
	header('location:index.php');
	exit();
}
if (isset($_POST['user']) && isset($_POST['pass'])) {
	require_once('connect.php');
	$connect = new mysqli($host, $user, $pass, $db);
	$connect->query('SET NAMES utf8');
	//$login = $_POST['user']; //odkomentować aby wstrzykiwać Mysql
	//$password = $_POST['pass'];
	$login = $connect->real_escape_string($_POST['user']); //zakomentować aby wstrzykiwać Mysql
	$password = $connect->real_escape_string($_POST['pass']);	
	//echo " $login $password"; //odkomentować,aby sprawdzic jak działa real_escape_string 
	$sql = "SELECT * FROM dane WHERE user='$login'";
	if ($result = $connect->query($sql)) {
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			if(password_verify($password, $row['pass'])){
				$_SESSION['log'] = true;
				$_SESSION['user'] = $row['user'];
				$_SESSION['img'] = $row['img'];
				$result->free_result();
				header('location:index.php');
			}
			else {
				$_SESSION['error'] = 'Nieprawidłowe hasło!!!!!';
			}
		} else {
			$_SESSION['error'] = 'Nieprawidłowy login!!!!!';
		}
	}
	$connect->close();
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Autoryzacja</title>
	<link rel="stylesheet" href="style.css">

<body>
	Zaloguj się<br />
	<form action="login.php" method="post">
		Login:<br /> <input type="text" name="user" /> <br /><br />
		Hasło:<br /> <input type="password" name="pass" /> <br /><br />
		<input type="submit" value="Loguj" />
	</form>
	<p class="error">
		<?php
		if (isset($_SESSION['error'])) echo $_SESSION['error'];
		?>
	</p>
	<a href = "register.php">Zarejestruj się</a>
</body>

</html>