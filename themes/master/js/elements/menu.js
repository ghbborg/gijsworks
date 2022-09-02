/**
 * Menu
 */

// Fix height for hamburger menu & homeslider
function initMenu() {
  var hamburgerContainer  = $('.menu-hamburger-container');
  var homeheaderContainer = $('.section-homeheader');
  var innerHeight         = $(window).innerHeight();
  hamburgerContainer.css('height', innerHeight);
  homeheaderContainer.css('height', innerHeight);
}

$(document).ready(function(){
  var hamburgerContainer  = $('.menu-hamburger-container');
  var homeheaderContainer = $('.section-homeheader');
  var innerHeight         = $(window).innerHeight();
  hamburgerContainer.css('height', innerHeight);
  homeheaderContainer.css('height', innerHeight);
})

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.transform = "translateY(0px)";
  } else {
    document.getElementById("navbar").style.transform = "translateY(-5.25rem)";
  }

  // Fix the navbar dissapearing on top of the page on mobile.
  if (currentScrollPos > 30) {
    prevScrollpos = currentScrollPos;
  }

  /* Make header white if homeheader section is active */
  var navTransparent = false;
  if (window.pageYOffset > -50 && window.pageYOffset < $(window).height()) {
    navTransparent = true;
  } else {
    navTransparent = false;
  }
  if (navTransparent == true) {
    $('#navbar').addClass("nav-transparent");
  } else {
    $('#navbar').removeClass("nav-transparent");    
  }
}

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
  hamburgerContainer.css('height', innerHeight);
  homeheaderContainer.css('height', innerHeight);
});