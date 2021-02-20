$(document).ready(function () {

    $('input[type="file"]').change(function () {
        var value = $("input[type='file']").val();
        $('.js-value').text(value);
    });

});
const accordeon = document.querySelector('#accordeon .accordeon__heading');
accordeon.addEventListener('click', my_func())
function my_func() {
	//todo	accordion
    $('#accordeon .accordeon__text').not($(this).next());
    $(this).next().toggleClass("active");
}
function myFunction(x) {
    x.classList.toggle("change");
}
//todo	slider
var slideIndex = 1;
showSlides(slideIndex);

// Вперед/назад элементы управления
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Элементы управления миниатюрами изображений
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-slider", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active-slider";
}
//todo	slider
//todo	accordeon
$(document).ready(function () {
	$('#accordeon .accordeon__heading').on('click', my_func);
});

function my_func() {
	$('#accordeon .accordeon__text').not($(this).next());
	$(this).next().toggleClass("active");
}
//todo	accordeon
//nav
function myFunction(x) {
	x.classList.toggle("change");
}
//nav
//todo	slider
var slideIndex = 1;
showSlides(slideIndex);

// Вперед/назад элементы управления
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// Элементы управления миниатюрами изображений
function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {
		slideIndex = 1
	}
	if (n < 1) {
		slideIndex = slides.length
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active-slider", "");
	}
	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active-slider";
}
//todo	slider
