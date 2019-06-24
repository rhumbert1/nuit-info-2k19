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
