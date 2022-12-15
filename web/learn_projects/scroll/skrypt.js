var skroller = document.getElementById("skroller");
var strona = document.getElementById("strona");
var czas;
var skroll = 0;
var pozycja = 0;
var i = 0;
var bb = document.getElementById("bb");

for(var i; i<500; i++){
    document.getElementById("kontent").innerHTML=document.getElementById("kontent").innerHTML+"<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus repellendus placeat quo";
}
function skrol() {
    if (skroller.scrollTop > skroll) { //w dol
        pozycja = pozycja - i*i * 2;
        strona.style.transition="all ease-out 0.2s";
        strona.style.top += 0.9*pozycja+"px";
        strona.style.transition="all ease-out 1s";
        strona.style.top = pozycja + "px";
    }
    else if (skroller.scrollTop < skroll) { //w gore
        pozycja = pozycja + i*i * 2;
        strona.style.transition="all ease-out 0.2s";
        strona.style.top += 0.9*pozycja + "px";
        strona.style.transition="all ease-out 1s";
        strona.style.top = pozycja + "px";
    }
    if (pozycja > 0) { //if limit gorny strony
        pozycja = 0;
        strona.style.transition="all ease-out 0.3s";
        strona.style.top = pozycja + "px";
    }
    //927 to wysokosc tego monitora
    if( pozycja<-1*strona.clientHeight+927){ //if limit dolny strony
        pozycja = -1*strona.clientHeight+927;
        strona.style.transition="all ease-out 0.3s";
        strona.style.top = pozycja + "px";
    }
    skroll = skroller.scrollTop;
    i = 0;

}

skroller.addEventListener("scroll", () => {
    i++;
    clearTimeout(czas);
    czas = setTimeout(() => {
        skrol();
    }, 18)
});

bb.addEventListener("click", function () {
    alert(strona.clientHeight);

});


//alert("ok");
