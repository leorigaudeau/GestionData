function redirect() {

    lien = document.getElementById("select").value;
    console.log(lien)
    urlbase = document.location.href
    console.log(urlbase)
    document.location.href=urlbase+lien;

}