var kanwa = document.createElement('canvas');
kanwa.setAttribute('id', 'kanwa');
kanwa.style.width="100%";
kanwa.style.height="100%";
kanwa.style.backgroundColor=`rgba(1,1,1,0.5)`;
document.getElementById("main-container").appendChild(kanwa);
var k=kanwa.getContext('2d');
function rysuj() {

    k.clearRect(0,0,szer,wys);
    k.beginPath();
    k.fillStyle="red";
    k.fillRect(500,500,100,100)
}
setInterval(rysuj, 20);
function r() {

    kontekst.strokeStyle = 'green';
    kontekst.lineWidth = 3;
    kontekst.clearRect(0, 0, szer, wys)//czyszczenie obszaru
    //pierwsza kulka
    kontekst.fillStyle = 'red';
    kontekst.beginPath();
    kontekst.arc(x1, y1, 30, 0, 2 * Math.PI);//arc(x, y, r, kąt_poczatkowy, kąt_końcowy, [odwrotnie do wskazowek])
    kontekst.closePath();
    kontekst.stroke();
    kontekst.fill();//wypełnia ścieżke
    //druga kulka
    kontekst.fillStyle = 'blue';
    kontekst.beginPath();
    kontekst.arc(x2, y2, 30, 0, 2 * Math.PI);//arc(x, y, r, kąt_poczatkowy, kąt_końcowy, [odwrotnie do wskazowek])
    kontekst.closePath();
    kontekst.stroke();
    kontekst.fill();//wypełnia ścieżke
    x1 += ux1;
    x2 += ux2;
    //ściany pionowe
    if (x1 + 30 > szer || x1 - 30 < 0) {
        ux1 = -ux1;
    }
    if (x2 + 30 > szer || x2 - 30 < 0) {
        ux2 = -ux2;
    }
    //kolizja miedzy kulkami
    if (x1 + 30 > x2 - 30) {
        ux1 = -ux1;
        ux2 = -ux2;
    }
}


