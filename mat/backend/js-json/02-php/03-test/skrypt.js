var formularz = document.querySelector("#formularz");
formularz.addEventListener("submit", (e)=>{
	e.preventDefault();
	const xhr = new XMLHttpRequest();
	var name = document.querySelector("#imie").value;
	var wartosc = document.querySelector("#nazwisko").value;
	xhr.addEventListener("load", ()=>{
		var json = JSON.parse(xhr.response);
		document.querySelector("#blok").innerHTML=`Received: <br>${xhr.response}<br><br>Przesłałeś:<br>
		${json[0].name} ${json[0].value}`;
	});
	xhr.open("POST", "wyslij.php", true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.send(`name=${name}&value=${wartosc}`);
});