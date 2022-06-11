
/*** Main Javascript File ***/


window.onload = function() {
    var today = new Date();
    var birthDate = new Date(2006, 12, 21);
    var age = today.getFullYear() - birthDate.getFullYear();
    var month = today.getMonth() - birthDate.getMonth();

    if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    document.querySelector(".age").innerHTML = age;
}


window.onscroll = function() {
    if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
        document.getElementById("go-to-top").style.display = "flex";
    } else {
        document.getElementById("go-to-top").style.display = "none";
    }
}


function currentSide(side) {
    alert('\nDu bist bereits auf der ' + side + '.\n');
}


function goToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


function imprint() {
    alert('Das Impressum gibt es momentan nicht,\nda die Website noch ein Prototyp ist!');
}