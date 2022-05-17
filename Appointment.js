const myDrop = document.querySelector("#myDropdown");
const dropBtn = document.querySelector(".dropbtn");

function myfuction() {
    myDrop.classList.toggle("show");
}

window.onclick = function (e) {
    if (!e.target.matches('dropBtn')) {
        var myDown = myDrop;
        if (myDown.classList.contains('show')) {
            myDown.classList.remove('show');
        }
    }
}