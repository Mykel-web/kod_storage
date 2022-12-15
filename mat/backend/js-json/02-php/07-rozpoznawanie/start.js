const xhr = new XMLHttpRequest();
//-------------------------------------------- 
function wyslij() {

	var imie = document.querySelector('#imie').value;
	
	//definicja metody obsługi odpowiedzi serwera
	xhr.addEventListener('load', () => {
		if (xhr.status == 200) {
			//wyodrębnia wiadomość wysłaną z serwera
			const komunikat = xhr.responseText
			//aktualizacja danych wyswietlanych klientowi
			document.querySelector("#divWiadomosc").innerHTML = `<em> ${komunikat}</em>`;
		}
	});
	xhr.addEventListener('error', () => {
		document.querySelector("#divWiadomosc").innerHTML="Problem z polączeniem";
	});
	xhr.open("POST", "start.php", true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	//wysłanie żadania do serwera
	xhr.send(`imie=${imie}`);
	setTimeout('wyslij()', 1000);

}
document.addEventListener('DOMContentLoaded', wyslij);