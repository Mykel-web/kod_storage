var form = document.querySelector('form');
form.addEventListener("submit", (e)=>{
	e.preventDefault();
	var obiekt = {
		nazwisko: document.querySelector("input[name='nazwisko']").value,
		imie: document.querySelector("input[name='imie']").value
	}

	const xhr = new XMLHttpRequest();
	xhr.addEventListener("load",()=>{
		json_data = JSON.parse(xhr.response);
		document.querySelector('#blok').innerHTML=`Received:<br> ${xhr.response}<br><br>
		`;
	});
	xhr.open("POST", "wyslij.php", true);
	xhr.setRequestHeader('Content-Type', 'application/json; charset=utf-8');
	xhr.send(JSON.stringify(obiekt));
});