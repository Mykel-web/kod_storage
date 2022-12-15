<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<head>
	<title>Koszyk zakupów</title>
</head>
<body>
	<h3> Lista artykułów</h3>
<?php
	if(isset($_POST['lista']))	{
		if(empty($_SESSION['koszyk'])) $_SESSION['koszyk']=serialize($_POST['lista']);
		else $_SESSION['koszyk']=serialize(array_unique(array_merge(unserialize($_SESSION['koszyk']),$_POST['lista'])));
		echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
		
	}
?>
<form action="index.php" method="post">
	<b> Wybierz produkt</b> <br/>
	<select name="lista[]" multiple="multiple" size="9">
		<option value="Monitor">Monitor</option>
		<option value="Drukarka">Drukarka</option>
		<option value="Klawiatura">Klawiatura</option>
		<option value="Myszka">Myszka</option>
		<option value="Głośniki">Głośniki</option>
		<option value="Kamera">Kamera</option>
		<option value="Słuchawki">Słuchawki</option>
		<option value="Dysk twardy">Dysk twardy</option>
	</select>
	<br/>
	<input type="submit" value="Wyślij" />

</form>
<p><a href="koszyk.php"> Przejdź do koszyka</a></p>

</body>
</html>

<!-- 
array_unique($tablica) - usuwa duplikaty z tablicy
array_merge($tablica1, $tablica2) - łączy tablice
Serializacja – w programowaniu komputerów proces przekształcania obiektów, tj. instancji określonych klas, do postaci szeregowej, czyli w strumień bajtów, z zachowaniem aktualnego stanu obiektu

-->
