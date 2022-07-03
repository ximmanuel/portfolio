
/*** Main Javascript File ***/


window.onload = function() {
    let today = new Date();
    let birthDate = new Date(2006, 12, 21);
    let age = today.getFullYear() - birthDate.getFullYear();
    let month = today.getMonth() - birthDate.getMonth();

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

function goToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}