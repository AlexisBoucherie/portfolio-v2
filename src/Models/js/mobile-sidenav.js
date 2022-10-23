var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");
var closeAct = document.getElementById("closeAction");

openBtn.addEventListener('click', openNav);
closeBtn.addEventListener('click', closeNav);
closeAct.addEventListener('click', closeNav);

/* Set the width of the side navigation to 250px */
function openNav() {
    sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    sidenav.classList.remove("active");
}