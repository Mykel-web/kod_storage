<?php
$katalog="./pliki/";//katalog docelowy
$maxRozmiar=$_POST['maxRozmiar'];
//is_uploaded_file- zwraca TRUE jeśli plik o nazwie plik został przysłany; 
//tmp_name - ścieżka tymczasowa
if(is_uploaded_file($_FILES['plik']['tmp_name'])) {
	if($_FILES['plik']['size'] >$maxRozmiar){
		echo "Plik jest  za duży!!!!!!!";
	}
	else{
		echo "Plik <b>".$_FILES['plik']['name']." </b> został odebrany.<br/>";
		if(isset($_FILES['plik']['type'])){
			echo " Typ pliku: ".$_FILES['plik']['type']."<br/>";
		}
		move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$_FILES['plik']['name']);
	}
}
else {
	echo "Błąd przesyłania pliku!!!!!!!";
}

?>