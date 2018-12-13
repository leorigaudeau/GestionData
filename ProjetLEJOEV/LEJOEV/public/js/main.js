function redirect() {

    lien = document.getElementById("select").value;
    console.log(lien)
    urlbase = document.location.href
    urlbase = urlbase.split("/")[0];
    console.log(urlbase)
    document.location.href=urlbase+lien;



}