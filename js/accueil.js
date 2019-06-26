/*var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = document.getElementsByClassName("panel");
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}*/

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
