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
	<h3> Lista artykułów</h3>
	<?php
	$koszyczek = array('Monitor', 'Drukarka', 'Klawiatura', 'Myszka', 'Głośniki', 'Kamera', 'Słuchawki', 'Dysk twardy', 'Skaner');
	if (isset($_POST['lista'])) {
		foreach ($_POST['lista'] as $produkt) {
			if (isset($_SESSION[$produkt])) $_SESSION[$produkt]++;
			else $_SESSION[$produkt] = 1;
		}
		if (empty($_SESSION['koszyk'])) $_SESSION['koszyk'] = serialize($_POST['lista']);
		else $_SESSION['koszyk'] = serialize(array_unique(array_merge(unserialize($_SESSION['koszyk']), $_POST['lista'])));
		echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
	}
	?>
	<form action="index.php" method="post">
		<b> Wybierz produkt</b> <br />
		<select name="lista[]" multiple="multiple" size="<?php echo count($koszyczek) ?>">
			<?php
			foreach ($koszyczek as $produkt)
				echo '<option value="' . $produkt . '">' . $produkt . '</option>';
			?>

		</select>
		<br />
		<input type="submit" value="Wyślij" />

	</form>
	<p><a href="koszyk.php"> Przejdź do koszyka</a></p>

</body>

</html>

<!-- 
array_unique($tablica) - usuwa duplikaty z tablicy
arrat_merge($tablica1, $tablica2) - łączy tablice
Serializacja – w programowaniu komputerów proces przekształcania obiektów, tj. instancji określonych klas, do postaci szeregowej, czyli w strumień bajtów, z zachowaniem aktualnego stanu obiektu

-->