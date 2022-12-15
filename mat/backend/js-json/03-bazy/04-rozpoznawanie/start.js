//utworzenie obiektu XmlHttpRequest
var xhr = new XMLHttpRequest();

function wyslij() {

	var nick = encodeURIComponent(document.querySelector("#nick").value);
	//definicja metody obsługi odpowiedzi serwera
	xhr.addEventListener('load', () => {
		if (xhr.status == 200) {
			const komunikat = xhr.responseText;
			//aktualizacja danych wyswietlanych klientowi
			document.querySelector("#divWiadomosc").innerHTML = `<em> ${komunikat}</em>`;
		}
	});
	xhr.addEventListener('error', () => {
		alert("Problem z polączeniem");
	});
	xhr.open("POST", "start.php", true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send(`nick=${nick}`);
	setTimeout('wyslij()', 1000);
}


document.addEventListener('DOMContentLoaded', wyslij);