//utworzenie obiektu xmlHttpRequest
const xhr = new XMLHttpRequest();
//--------------------------------------------

function dodaj() {
	var puste = false;
	var imie = document.querySelector('#imie').value;
	var nazwisko = document.querySelector('#nazwisko').value;
	var dataUr = document.querySelector('#dataUr').value;
	if (imie == '' || nazwisko == '' || dataUr == 0000 - 00 - 00) {
		alert('Uzupełnij puste pola');
		puste = true;
	}

	if (!puste) {
		xhr.addEventListener('load', () => {
			if (xhr.status == 200) {
				document.querySelector('#formularz').reset();
				document.querySelector("#blok").innerHTML = xhr.responseText;
			}
		});

		xhr.addEventListener("error", () => {
			alert("Problem z polączeniem");
		});

		xhr.open('POST', 'dodaj.php', true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(`imie=${imie}&nazwisko=${nazwisko}&dataUr=${dataUr}`);

	}
}


//----------------------------------------------
document.querySelector('#przycisk').addEventListener('click', dodaj);
