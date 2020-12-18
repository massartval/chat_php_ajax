let no = 30; let delai = 10;
let dx = new Array(), xp = new Array(), yp = new Array();
let am = new Array(), stx = new Array(), sty = new Array();
let i;
larg_fenetre = (document.body.offsetWidth < window.innerWidth) ? window.innerWidth : document.body.offsetWidth;
haut_fenetre = (document.body.offsetHeight < window.innerHeight) ? window.innerHeight : document.body.offsetHeight;

for (i = 0; i < no; i++) {
    dx[i] = 0; 5
    xp[i] = Math.random() * (larg_fenetre - 300);
    yp[i] = Math.random() * haut_fenetre;
    am[i] = Math.random() * 5;
    stx[i] = 0.02 + Math.random() / 10;
    sty[i] = 0.7 + Math.random();

    obj = document.getElementsByTagName('body')[0];
    para = document.createElement("img");
    para.setAttribute("src", "assets/img/2411815.svg");
    para.setAttribute("id", "dot" + i);
    para.style.position = "absolute";
    para.style.zIndex = "2";
    obj.appendChild(para);
}

function neige() {
    for (i = 0; i < no; i++) {
        dx[i] += stx[i];
        yp[i] += sty[i];
        if (yp[i] > haut_fenetre - 300) {
            xp[i] = Math.random() * (larg_fenetre - am[i] - 400);
            yp[i] = 0;
        }
        document.getElementById("dot" + i).style.top = yp[i] + "px";
        document.getElementById("dot" + i).style.left = xp[i] + am[i] * Math.sin(dx[i]) + "px";
    }
    setTimeout("neige()", delai);
}

neige();

let identifiant;
let email;
let movies;

function register() { //form register
    identifiant = document.getElementById('registerIdentifiant').value;
    email = document.getElementById('registerEmail').value;
    alert("Your account has been created. \nYour identifiant : " + identifiant + "\nYour email : " + email);
}
function login() { //form login
    identifiant = document.getElementById('loginIdentifiant').value;
    alert('Hello ' + identifiant + ". You are connected.");
}