/**
 * project
 */

function initProject() {
  if ($('.double-phone-showcase')) {
     // Project active state
    var uspButton    = $('.usp');
    var phoneImage   = $('.phone-image');
    var selectedCategory;

    uspButton.click(function() {
      // Add active class to button
      uspButton.removeClass('active');
      $(this).addClass('active');

      // Get associated number and add active to right image
      let number  = $(this).attr('data-number');
      phoneImage.removeClass('active');
      $('.phone-image[data-number=' + number + ']').addClass('active');

      if($(window).width() < 1024) {
        slide(0, parseInt(number));
      }
    })

    // On clicking images, enlarge them
    phoneImage.click(function() {
      phoneImage.removeClass('active fade-out');
      $(this).addClass('active');
    })




    // Project slider!
    var sliderWrapper   = $('.image-wrapper');
    var totalSlides     = $('.phone-image').length;
    var screenWidth     = window.innerWidth; 
    var totalSlid       = 0;
    var slideIndex      = 0;
    var phoneWidth      = $('.phone-image').outerWidth(true);
    var slideWidth      = phoneWidth;
    var threshold       = 100;
    var dragStart;
    var dragEnd;

    // Mobile only
    if($(window).width() < 1024) {

      // Touch support
      sliderWrapper.on({'touchstart' : function() {
        if (sliderWrapper.hasClass('slide-transition') || sliderWrapper.hasClass('one-child')) return;  
        dragStart = event.touches[0].clientX;
        $(this).on('touchmove', function(){
          dragEnd = event.touches[0].clientX;
          $(this).css('transform','translateX('+ dragLength() +'px)')
        })
        $(sliderWrapper).on('touchend', function(){
          if (dragPos() > threshold) { return slide('prev') }
          else if (dragPos() < -threshold) { return slide('next') }
          else if (dragPos() > -threshold && dragPos() < threshold){return slide(0)};
        })
      }});

      function dragLength() {
        return -totalSlid + dragPos();
      }

      function dragPos() {
        return  dragEnd - dragStart;
      }

      // Slider buttons
      $('.slider-next').click(function() {
        $(this).addClass('active')
        slide('next');

        setTimeout(function() {
          $('.slider-next').removeClass('active');
        }, 300)
      })

      $('.slider-prev').click(function() {
        $(this).addClass('active')
        slide('prev');

        setTimeout(function() {
          $('.slider-prev').removeClass('active');
        }, 300)
      })

      function slide(direction, directSlide) {
        if (sliderWrapper.hasClass('slide-transition')) return;
      
        sliderWrapper.addClass('slide-transition');

        if (directSlide == null) {
          if(direction == 'next' && slideIndex != totalSlides-1) {
            slideIndex++;
          } else if (direction == 'prev' && slideIndex != 0) {
            slideIndex--;
          }
        } else {
          // Allow USPs to slide
          slideIndex = directSlide;
        }
      
        // Reset  dragend
        dragEnd = dragStart;
        // Calculate slide distance
        totalSlid = slideIndex * slideWidth;

        // Slide!
        sliderWrapper.css('transform','translateX(-' + totalSlid + 'px)'); 

        // Remove transition
        setTimeout(function() {
          sliderWrapper.removeClass('slide-transition');
        }, 300);

      }
    }

    // On resize
    $(window).resize(function() {
      screenWidth     = window.innerWidth; 
      slideWidth      = $('.phone-image').outerWidth(true);

      if($(window).width() > 1024) {
        sliderWrapper.css('transform', 'translateX(0px)');
      }
    });
  }
}

initProject();

