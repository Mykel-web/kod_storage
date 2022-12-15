document.getElementById("menu").innerHTML='<a class="m1" style="display: none;"> test </a> <a class="m1" href="index.html"> Strona główna </a><a class="m1" href="1.html"> Odżywianie </a><a class="m1" href="2.html"> Szczeniak</a><a class="m1" href="3.html"> Higiena </a><a class="m1" href="4.html"> Ciekawostki </a><a class="m1" href="5.html"> Kanwa </a>';
var strony = document.getElementsByClassName("m1");
function strona(numer) {
    strony[numer + 1].innerHTML = `<img src="wolf.jpg" id="wolf"  style="border-top-right-radius: 40px;border-bottom-right-radius: 40px; transform: scaleX(-1);">${strony[numer + 1].innerHTML}<img src="wolf.jpg" id="wolf" style="border-top-right-radius: 40px;border-bottom-right-radius: 40px;">`;
    strony[numer + 1].style.padding = "0px";
    styl(numer);
}
function styl(numer) {
    if (numer == 0) { document.getElementById("right").style.fontSize="30px"; document.getElementById("right").style.lineHeight="50px"; }
    if (numer == 1) { wiek(1); }
    if (numer == 2 || numer == 3) { for (i = 0; i < strony.length; i++)  strony[i].style.backgroundImage = "linear-gradient(to right top, rgba(26, 78, 16, 0.6), rgba(51, 224, 8, 0.6))"; }
    if (numer == 3) {
        document.getElementById("main-container").style.display = "flex";
        document.getElementById("main-container").style.alignItems = "center";
        document.getElementById("main-container").style.flexDirection = "column";
        document.getElementById("main-container").style.gap = "8vh";
        setTimeout(function () {
            document.getElementById("wid").style.display = "";
            document.getElementById("wid").style.height = "80vh";
            document.getElementById("logo").style.display = "none";
            document.getElementById("wid").style.width = "80vw";
        }, 2000);
    }
    if (numer == 4) {
        for (i = 0; i < strony.length; i++) { strony[i].style.backgroundImage = "linear-gradient(to right top, rgba(3, 69, 131, 0.4), rgba(11, 242, 250, 0.4))"; }
        document.body.style.lineHeight = "40px";
    }
    if (numer == 5) {
        for (i = 0; i < strony.length; i++) { strony[i].style.backgroundImage = "linear-gradient(to right top, rgba(3, 69, 131, 0.4), rgba(11, 242, 250, 0.4))"; }
    }
    var logo = document.createElement('div');
    logo.innerHTML = '<a id="logo" href="index.html" style="text-decoration:none; font-size:40px; color:white; border-radius:15px; padding:10px; position:absolute; bottom:3vh; left:3vw; background-color: ">Piesel.cba.pl</a>';
    document.body.appendChild(logo);
    let styl = window.getComputedStyle(strony[2], null); styl = styl.getPropertyValue("background-image");
    document.getElementById("logo").style.backgroundImage = styl.replace(/0.6|0.5|0.4/g, "1");
}
function karma() {
    let waga = document.getElementById("waga").value;
    let p = document.getElementById("wynik");
    let pies = parseInt(sessionStorage.getItem("pies"));
    var karma;
    if (waga <= 0) p.innerHTML = `Podaj prawidłową wagę`;
    else {
        if (pies == 2) {
            if (waga < 4) { karma = "40  – 105"; }
            else if (waga < 6) { karma = "105-160"; }
            else if (waga < 10) { karma = "160-240"; }
            else { karma = "240-375"; }
            p.innerHTML = "Szczeniak powinien jeść od " + karma + " gramów dziennie.";
        }
        else {
            if (waga < 6) { karma = "35-110"; }
            else if (waga < 20) { karma = "110-320"; }
            else if (waga < 30) { karma = "320-435"; }
            else { karma = "435+"; }
            p.innerHTML = "Dorosły pies powinien jeść od " + karma + " gramów dziennie.";
        }
    }
}
function wiek(wiek) {
    pies2 = document.getElementById("pies2");
    pies1 = document.getElementById("pies1");
    if (wiek == 1) {
        pies1.innerHTML = "Dorosły ✔️";
        pies2.innerHTML = "Sczeniak";
        sessionStorage.setItem("pies", "1");
        karma();
    }
    else if (wiek == 2) {
        pies1.innerHTML = "Dorosły";
        pies2.innerHTML = "Sczeniak ✔️";
        sessionStorage.setItem("pies", "2");
        karma();
    }
}
window.onload = strona(parseInt(sessionStorage.getItem("numer")));
document.getElementById("waga").addEventListener("input", karma);
document.addEventListener("load", function(){
    document.getElementById("kanwa").style.display="";
});
