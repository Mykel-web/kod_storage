var formularz = document.querySelector('#formularz');
formularz.addEventListener('submit', (e) => {
	e.preventDefault(); //przerywamy wysyłanie formularza

	const xhr = new XMLHttpRequest();

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

	var imie = document.querySelector('#imie').value;
	var nazwisko = document.querySelector('#nazwisko').value;
	const formData = new FormData();
	formData.append("imie", imie);
	formData.append("nazwisko", nazwisko);

	xhr.open('POST', 'wyslij.php', true);
	//nie trzeba ustawiać nagłówka ponieważ dane zawsze są tutaj wysyłane za pomocą kodowania multipart/form-data.
	xhr.send(formData);
});

