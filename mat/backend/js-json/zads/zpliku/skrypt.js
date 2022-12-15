var xhr = new XMLHttpRequest();


/* funkcja na załadowaniu requesta
200 OK
404 Nie odnaleziono
500 Wewnętrzny błąd serwera
*/
xhr.addEventListener("load", () => {
		document.querySelector('#blok').innerHTML = xhr.responseText;
});

//wysłanie requesta
xhr.open("GET", "plik.txt", true);
xhr.send();
