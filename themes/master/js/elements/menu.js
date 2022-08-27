/**
 * Menu
 */

// Fix height for hamburger menu & homeslider
$(document).ready(function(){
  var hamburgerContainer  = $('.menu-hamburger-container');
  var innerHeight         = $(window).innerHeight();
  hamburgerContainer.css('height', innerHeight);
})

/* Hamburger menu */

var parentClicked = false;

$('.menu-item-has-children').click(function() {
  if (parentClicked == false) {
    parentClicked = true;
    $(this).addClass('parent-clicked');
  } else {
    parentClicked = false;
    $(this).removeClass('parent-clicked');
  }
})

$("#hamburger-menu").click(function() {
  hamburger();
});

var hamburgerToggled;

function hamburger() {
  var hamburgerContainer  = $('.menu-hamburger-container');
  var innerHeight         = $(window).innerHeight();
  hamburgerContainer.css('height', innerHeight);
  
  if (hamburgerToggled == false) {
    hamburgerToggled = true;

    document
      .getElementById("hamburger-menu")
      .classList.remove("hamburger-active");
    document
      .getElementById("menu-hamburger-container")
      .classList.remove("menu-active");
    $("body").removeClass("overflow-hidden");
    $("body").removeClass("hamburgermenu-active");
  } else {
    hamburgerToggled = false;
    document.getElementById("hamburger-menu").classList.add("hamburger-active");
    document
      .getElementById("menu-hamburger-container")
      .classList.add("menu-active");
    $("body").addClass("overflow-hidden");
    $("body").addClass("hamburgermenu-active");
  }
}

window.addEventListener('resize', function(event){
  var hamburgerContainer  = $('.menu-hamburger-container');
  var homeheaderContainer = $('.section-homeheader');
  var innerHeight         = $(window).innerHeight();
  var homeHeaderHeight    = $(window).innerHeight()*.9;
  hamburgerContainer.css('height', innerHeight);
  // homeheaderContainer.css('height', homeHeaderHeight);
});