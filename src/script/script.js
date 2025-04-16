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
