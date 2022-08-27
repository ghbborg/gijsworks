/**
 * Scroll
 */

function initScroll() {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
  
        document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        });
    });
  });
  
  $(window).scroll(function() {
    if ($('.scrolldown-arrow')[0]) {
      if ($(this).scrollTop() > 100) {
        $('.scrolldown-arrow').css({
          'opacity': '0',
          'pointer-events': 'none'
        });
      } else if ($(this).scrollTop() < 100) {
        $('.scrolldown-arrow').css({
          'opacity': '1',
          'pointer-events': 'all'
        });
      }
    }
  })
}

initScroll();