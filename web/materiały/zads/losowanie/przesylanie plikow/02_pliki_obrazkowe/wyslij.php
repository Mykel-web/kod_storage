<?php
$katalog="./pliki/";//katalog docelowy
$maxRozmiar=$_POST['maxRozmiar'];
$obrazy= array("image/jpeg","image/png","image/gif","image/bmp");
//is_uploaded_file- zwraca TRUE jeśli plik o nazwie plik został przysłany; tmp_name - ścieżka tymczasowa
if(is_uploaded_file($_FILES['plik']['tmp_name'])) {
	if($_FILES['plik']['size'] >$maxRozmiar){
		echo "Plik jest  za duży!!!!!!!";
	}
	else {
		if(isset($_FILES['plik']['type']))	{
			$typ=$_FILES['plik']['type'];
			if(in_array($typ,$obrazy))	{
				move_uploaded_file($_FILES['plik']['tmp_name'], $katalog.$_FILES['plik']['name']);
				echo "Obrazek został wysłany";
				echo'<br/><img src="'.$katalog.$_FILES['plik']['name'].'" width="200"/>';
			}
			else {
				echo "To nie jest plik z obrazem!!!!!!!";
			}
		}
	}
}
else {
	echo "Błąd przesyłania pliku!!!!!!!";
}
