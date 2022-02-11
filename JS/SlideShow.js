var slideIndex = 1;
window.addEventListener('load', function() {
    showSlides(slideIndex);
    automateSlides()
})

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");

function showSlides(n) {
    var i;
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function automateSlides() {
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(function() {
        showSlides();
        automateSlides();
    }, 2000);
    console.log(11111);
}