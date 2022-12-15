const xhr = new XMLHttpRequest();

xhr.addEventListener("load", () => {
	if (xhr.status === 200) { //status - kod odpowiedzi serwera HTTP
		const json = JSON.parse(xhr.response);//konwertuje odpowiedź na obiekt JavaScript
		document.querySelector('#blok').innerHTML = `Wersja JSON: ${xhr.response} <br>`; // odpowiedź serwera jako tekst
		document.querySelector('#blok').innerHTML += `<br/>Wersja: JSON.parse(xhr.response):<br>
		json.glowny.imie: ${json.glowny.imie}<br> json.sektor[0].imie: ${json.sektor[0].imie}`; // odpowiedź obiekt JavaScript
	}
});
xhr.addEventListener("error", () => {
	alert("Problem z polączeniem");
});
xhr.open("GET", "plik.json", true);//przygotowuje żądanie, true -asynchroniczne
xhr.send();