function start() {
	const xhr = new XMLHttpRequest();
	var blok = document.querySelector('#blok');
	xhr.addEventListener('load', () => {
		if (xhr.status == 200) {
			const json = JSON.parse(xhr.response);
			blok.innerHTML = '<h3>Wersja JSON</h3>';
			blok.innerHTML += xhr.response;
			blok.innerHTML += '<h3>Wersja Normalna</h3>';
			for (let i = 0; i < json.length; i++) blok.innerHTML += `${json[i].imie} ${json[i].nazwisko}<br/>`;
			
		}
	});

	xhr.addEventListener("error", () => {
		alert("Problem z polączeniem");
	});

	xhr.open('GET', 'dane.php', true);
	xhr.send();
}

//---------------------------------------
document.querySelector('#przycisk').addEventListener('click', start);