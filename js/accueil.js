var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

$('.titre-table').click(function(){
  $(this).siblings('.plan').slideToggle("slow");
})

$('.table1').click(function(){
  $('.arrow1').toggleClass("rotate");
})

$('.table2').click(function(){
  $('.arrow2').toggleClass("rotate");
})

$('.table3').click(function(){
  $('.arrow3').toggleClass("rotate");
})

$('.table4').click(function(){
  $('.arrow4').toggleClass("rotate");
})

function responsiveNavbar() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}

function openUrl() {
window.location.href = "https://rhumbert1.github.io/devis-ms/index.html";
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
$('.dropbtn').click(function () {
  var isvisible = $(this).next('.dropdown-content').is(":visible")
  $('.dropdown-content:visible').hide();
  if (!isvisible)
    {
      $(this).next('.dropdown-content').toggle()
    }
})
