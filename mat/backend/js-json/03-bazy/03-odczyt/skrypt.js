//utworzenie obiektu xmlHttpRequest
const xhr = new XMLHttpRequest();
//---------------------------------------

function odpowiedzSerwera() {
	if (xhr.status == 200) {
		const json = JSON.parse(xhr.response);
		document.querySelector('#blok1').innerHTML = `<h4> Wersja JSON</h4> <p>${xhr.response}</p>`;
		//console.log(xhr.response);
		document.querySelector('#blok2').innerHTML = '<h4> Wersja w tabeli</h4>';
		var tabela = document.createElement('table');
		var wierszH = document.createElement('tr');
		var lpH = document.createElement('th');
		var imieH = document.createElement('th');
		var nazwiskoH = document.createElement('th');
		var dataUrH = document.createElement('th');
		// nagłowki tabeli
		lpH.innerHTML = 'lp';
		imieH.innerHTML = 'imię';
		nazwiskoH.innerHTML = 'nazwisko';
		dataUrH.innerHTML = 'data urodzenia';
		wierszH.appendChild(lpH);
		wierszH.appendChild(imieH);
		wierszH.appendChild(nazwiskoH);
		wierszH.appendChild(dataUrH);
		tabela.appendChild(wierszH);

		for (let i = 0; i < json.length; i++) {
			var wiersz = document.createElement('tr');
			var lp = document.createElement('td');
			var imie = document.createElement('td');
			var nazwisko = document.createElement('td');
			var dataUr = document.createElement('td');

			lp.innerHTML = i + 1;
			imie.innerHTML = json[i].imie;
			nazwisko.innerHTML = json[i].nazwisko;
			dataUr.innerHTML = json[i].dataUr;
			wiersz.appendChild(lp);
			wiersz.appendChild(imie);
			wiersz.appendChild(nazwisko);
			wiersz.appendChild(dataUr);
			tabela.appendChild(wiersz);
		}
		document.querySelector('#blok2').appendChild(tabela);
	}
}
//---------------------------------
function wyswietl() {
	xhr.addEventListener('load', odpowiedzSerwera);
	xhr.addEventListener("error", () => {
		alert("Problem z polączeniem");
	});
	xhr.open('GET', 'dane.php', true);
	xhr.send();

	setTimeout('wyswietl()', 10000);
}
//----------------------------------------------

document.addEventListener('DOMContentLoaded', wyswietl);

