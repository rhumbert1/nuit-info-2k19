var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
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
