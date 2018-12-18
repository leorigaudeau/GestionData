

function redirect() {

    lien = document.getElementById("select").value;
    console.log(lien)
    urlbase = document.location.href
    urlbase = urlbase.split("/")[0];
    console.log(urlbase)
    document.location.href=urlbase+"/analyse/"+lien;
}

var counter = document.getElementById('counter').getContext('2d');
var no = 0; // Commencement
var pointToFill = 4.72; // C'est la ou tu commence à remplir le cercle.
var cw = counter.canvas.width; //retourne la largeur de canvas
var ch = counter.canvas.height; //retourne la hauteur de canvas
var diff;  // ca trouve la différence entre la valeur actuelle et la valeur max (100%)
var limit =document.getElementById('getmoyenne').value;

function fillCounter (){
    diff = ((no/100) * Math.PI*2*10); // petit calcul des mif trouver sur le net tkt bébé

    counter.clearRect(0,0,cw,ch); // Clear e trestart la putain de fonction

    counter.lineWidth = 10;
    counter.fillStyle = '#5eb5e0'; // Couleur du chiffre choisi

    counter.strokeStyle = '#5eb5e0';

    counter.textAlign = 'center';

    counter.font = "25px monospace"; //Fontsize et la face
    counter.fillText(no+'%',100,110);
    counter.beginPath();
    counter.arc(100,100,90,pointToFill,diff/10+pointToFill);

    counter.stroke();
    if(no>= limit) //-> Boucle pour délimité la progression de la bar
    {
        clearTimeout(fill);
    }
    no++;
}


var fill =setInterval(fillCounter,50);






