var xhr = new XMLHttpRequest();

//Mówimy, jaka funkcja będzie obsługiwała nasz obiekt (tu anonimowa). Gdy nie jest anonimowa nie piszemy nawiasów(bo to tylko wskaźnik do funkcji) Inaczej mówiąc określamy co się stanie po otrzymaniu odpowiedzi
xhr.addEventListener("load", () => {//połączenie udało się 
	if (xhr.status === 200) {//status - kod odpowiedzi serwera HTTP
		document.querySelector('#blok').innerHTML = xhr.responseText;// zwróci odpowiedź serwera jako ciąg znakowy
	}
});
xhr.addEventListener("error", () => {
	alert("Problem z polączeniem");
});
xhr.open("GET", "plik.txt", true);//przygotowuje żądanie, true -asynchroniczne
xhr.send();
/*
status- kod odpowiedzi serwera HTTP
200 OK
404 Nie odnaleziono
500 Wewnętrzny błąd serwera
https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html
*/