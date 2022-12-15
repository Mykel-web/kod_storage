//bilbioteka poczatek
function evt(element, event, fn) {
    document.getElementById(`${element}`).addEventListener(`${event}`, fn);
}
//evt("btn2", "click", pozycja);
//bilbioteka koniec

var bg1 = document.getElementById('bg1');
var bg2 = document.getElementById('bg2');
var head = document.getElementById("head");
var hspan = document.getElementById("hspan")
var nav = document.getElementById("nav");


bg1.style.backgroundPositionY = window.pageYOffset - window.pageYOffset / 8 + "px";
window.addEventListener('scroll', function () {
    if (window.pageYOffset > 200) {
        head.classList.add("navscroll");
        hspan.classList.add("hss");
        nav.classList.add("navs")
    }
    else {
        head.classList.remove("navscroll");
        hspan.classList.remove("hss");
        nav.classList.remove("navs")
    }
})


//scroll backgroundu & navbar

window.addEventListener("scroll", () => {

    bg1.style.backgroundPositionY = window.pageYOffset - window.pageYOffset / 8 + "px";
    bg2.style.backgroundPositionY = window.pageYOffset - window.pageYOffset / 8 - bg2.offsetTop + "px";
});


