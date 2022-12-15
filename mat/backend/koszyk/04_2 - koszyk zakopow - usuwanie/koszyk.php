<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<style>
	button {
		cursor: pointer
	}
</style>

<head>
	<title>Koszyk zakupów</title>
</head>

<body>
	<h1> Zawartość koszyka</h1>
	<?php
	if (isset($_SESSION['koszyk'])) {
		echo "<ul>";
		foreach (unserialize($_SESSION['koszyk']) as $produkt) {
			if (isset($_SESSION[$produkt]) && $_SESSION[$produkt] > 0) {
				echo '<li>' . $produkt . ' ' . $_SESSION[$produkt] . ' sztuk  
				<a href="zwieksz.php?produkt=' . $produkt . '"><button>+</button></a> 
				<a href="zmniejsz.php?produkt=' . $produkt . '"><button>-</button></a></li>';
			}
		}
		echo "<ul>";
	} else {
		echo "Brak sesji";
	}
	?>

	<p><a href="index.php"> Przejdź do listy produktów</a></p>
</body>

</html>