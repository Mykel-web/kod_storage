var formularz = document.querySelector('form');//pierwszy formularz (i tak jest jeden)

formularz.addEventListener('submit', (e) => {
	e.preventDefault(); //przerywamy wysyłanie formularza
	const xhr = new XMLHttpRequest();

	var obiekt = {
		imie: document.querySelector("input[name='imie']").value,
		nazwisko: document.querySelector("input[name='nazwisko']").value
	}
	xhr.addEventListener('load', () => {
		if (xhr.status == 200) {
			const json = JSON.parse(xhr.response);
			document.querySelector('#blok').innerHTML = `${xhr.response}<br/>`;
			document.querySelector('#blok').innerHTML += `${json.imie} ${json.nazwisko}<br/>`;

		}
	});

	xhr.addEventListener("error", () => {
		alert("Problem z polączeniem");
	});

	xhr.open('POST', 'wyslij.php', true);
	xhr.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
	//wysłanie żadania do serwera
	xhr.send(JSON.stringify(obiekt));
});

/*
Musimy poinformować serwer, jakie dane chcemy do niego wysłać. Służy do tego metoda setRequestHeader(). W połączeniach GET nie musimy tego robić, gdyż wszystkie serwery domyślnie wiedzą jak sobie radzić z danymi znajdującymi się za znakiem "?".

Domyślnym kodowaniem formularzy jest application/x-www-form-urlencoded. Kodowanie to polega na utworzeniu par: nazwakontrolki=wartosc i połączeniu ich separatorem &. Wszystkie znaki specjalne występujące w nazwach lub wartościach kontrolek zostają przedstawione w postaci kodu szesnastkowego poprzedzonego znakiem procentu
Na przykład spacja jest zamieniana na napis %20 (kod ASCII znaku spacja - w systemie dziesiętnym - jest równy 32; liczba 32 w systemie szesnastkowym wynosi 20HEX).


Możesz równie dobrze ustawić nagłówek text/xml i wysyłać xml, czy  obiekty javascript (json).

*/