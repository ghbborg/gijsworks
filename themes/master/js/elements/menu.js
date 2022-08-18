/**
 * Menu
 */

// Fix height for hamburger menu & homeslider
$(document).ready(function(){
  var hamburgerContainer  = $('.menu-hamburger-container');
  var homeheaderContainer = $('.section-homeheader');
  var homeHeaderHeight    = window.innerHeight;
  var screenHeight         = window.outerHeight;
  hamburgerContainer.css('height', screenHeight);
  homeheaderContainer.css('height', homeHeaderHeight);
  console.log(window.outerHeight);
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
  var screenHeight         = window.innerHeight;
  hamburgerContainer.css('height', screenHeight);
  
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

window.addEventListener('resize', function(){
    var hamburgerContainer  = $('.menu-hamburger-container');
    var homeheaderContainer = $('.section-homeheader');
    var screenHeight        = window.outerHeight;
    var homeHeaderHeight    = window.innerHeight;
    hamburgerContainer.css('height', screenHeight);
    homeheaderContainer.css('height', screenHeight);
});
ht', homeHeaderHeight);
  }
});
