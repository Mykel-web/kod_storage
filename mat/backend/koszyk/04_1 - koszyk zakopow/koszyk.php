<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />

<head>
	<title>Koszyk zakupów</title>
</head>

<body>
	<h1> Zawartość koszyka</h1>
	<?php
	if (isset($_SESSION['koszyk'])) {
		echo "<ul>";
		foreach (unserialize($_SESSION['koszyk']) as $produkt) {
			echo "<li>" . $produkt . "</li>";
		}
		echo "</ul>";
	} else {
		echo "Brak sesji";
	}
	?>
	<p><a href="index.php"> Przejdź do listy produktów</a></p>
</body>

</html>