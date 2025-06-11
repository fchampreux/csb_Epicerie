function currentSlide(number) {
	let slide = document.querySelector("#item-"+number);
	slide.checked = true;
	return number;
}

let timer = 3000;
setInterval(function(){
	let count = document.querySelectorAll('input[name="slider"]').length;
	let checked = document.querySelector('input[name="slider"]:checked');
	let nb = (parseInt(checked.id.slice(5))+1)%(count+1);
	if (nb == 0){
        nb = nb + 1;
	}
	currentSlide(nb);
}, timer);

var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
	sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
	sidenav.classList.remove("active");
}
