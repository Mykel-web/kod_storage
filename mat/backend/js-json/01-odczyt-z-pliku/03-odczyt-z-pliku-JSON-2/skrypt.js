
//--------------------------------------------
function sprawdz() {
	const xhr = new XMLHttpRequest();
	xhr.responseType = "json";// nie będziemy musieli konwertować
	//Mówimy, jaka funkcja będzie obsługiwała nasz obiekt (tu anomimowa). Gdy nie jest anonimowa nie piszemy nawiasów(bo to tylko wskaźnik do funkcji). Inaczej mówiąc określamy co się stanie po otrzymaniu odpowiedzi
	xhr.addEventListener("load", () => {
		if (xhr.status == 200) {// status - kod odpowiedzi serwera HTTP
			const json = xhr.response;
			//mozna zapisać "xhr.response.osoby[i].imie" zamiast "json.osoby[i].imie"
			document.querySelector('#blok').innerHTML = '';
			for (let i = 0; i < json.osoby.length; i++)
				document.querySelector('#blok').innerHTML += `${json.osoby[i].imie} ${json.osoby[i].nazwisko} ${json.osoby[i].stan_konta} Pies: ${json.psy[i].imie}<br/>`;
		}
	});
	xhr.addEventListener("error", () => {
		alert("Problem z polączeniem");
	});
	xhr.open('GET', 'plik.json', true);//przygotowuje żądanie, true -asynchroniczne
	xhr.send();
}
//---------------------------------------
document.querySelector('#przycisk').addEventListener("click", sprawdz);