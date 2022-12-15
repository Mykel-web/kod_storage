//utworzenie obiektu xhrRequest
const xhr = new XMLHttpRequest();
//---------------------------------------

function dodaj() {
	var a = document.querySelector('#a').value;
	var b = document.querySelector('#b').value;
	//jeśli puste zerujemy
	if (a == '') a = 0;
	if (b == '') b = 0;

	xhr.addEventListener('load', () => {
		if (xhr.status == 200) {
			const json = JSON.parse(xhr.response);
			//aktualizacja danych wyswietlanych klientowi
			document.querySelector('#wynik').value = json.wynik;
			//funkcję dodaj powtarzamy po sekundzie
			setTimeout('dodaj()', 1000);
		}
	});

	xhr.addEventListener("error", () => {
		alert("Problem z polączeniem");
	});

	xhr.open('POST', 'dodaj.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	//wysłanie żadania do serwera
	xhr.send(`a=${a}&b=${b}`);
}

//--------------------------------------------
document.addEventListener('DOMContentLoaded', dodaj);
