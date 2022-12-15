function pobierz() {
	const xhr = new XMLHttpRequest();
	xhr.responseType = "json"; // nie bedziemy musieli konwertować
	xhr.addEventListener("load", () => {
		if (xhr.status == 200) {
			const json = xhr.response;
			var tabela = document.createElement('table');
			var wierszN = document.createElement('tr');//wiersz nagłówka
			var lpK = document.createElement('th');//K od kolumna
			var imieK = document.createElement('th');
			var nazwiskoK = document.createElement('th');
			lpK.innerHTML = 'lp';
			imieK.innerHTML = 'imię';
			nazwiskoK.innerHTML = 'nazwisko';
			wierszN.appendChild(lpK);
			wierszN.appendChild(imieK);
			wierszN.appendChild(nazwiskoK);
			tabela.appendChild(wierszN);

			document.querySelector('#blok').innerHTML = '';
			for (let i = 0; i < json.osoby.length; i++) {
				let wiersz = document.createElement('tr');
				let lp = document.createElement('td');
				let imie = document.createElement('td');
				let nazwisko = document.createElement('td');
				lp.innerHTML = i + 1;
				imie.innerHTML = json.osoby[i].imie
				nazwisko.innerHTML = json.osoby[i].nazwisko
				wiersz.appendChild(lp);
				wiersz.appendChild(imie);
				wiersz.appendChild(nazwisko);
				tabela.appendChild(wiersz);
			}
			document.getElementById('blok').appendChild(tabela);
		}
	});
	xhr.addEventListener("error", () => {
		alert("Problem z polączeniem");
	});
	xhr.open("GET", "plik.json", true);//przygotowuje żądanie, true -asynchroniczne
	xhr.send();
}
//---------------------------------------
document.querySelector('#przycisk').addEventListener("click", pobierz);

