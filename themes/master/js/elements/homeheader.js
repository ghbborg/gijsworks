/**
 * Homeheader
 */

// Word switch

function initHomeHeader() {
  var totalWords         = $('.changing-word').length;
  var index             = 0;
  var animationDuration = 3;

  if ($('.section-homeheader')[0]) {
    for(var i = 0; i < totalWords; i++) {
      $('.word-' + i).css('animation' , 'rotateWord ' + animationDuration*totalWords + 's infinite ' + animationDuration*i + 's');
    }
  }
}

initHomeHeader();