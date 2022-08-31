/**
 * Form
 */

// Change text color after people type in new inputs
$('.wpcf7 input, .wpcf7 textarea').change(function() {
  $(this).css('color', 'rgba(255,255,255, .75)')
  console.log('hi');
})

// Reset text color after submitting (So they can be red again)
$('.wpcf7-form').submit(function() {
  $('.wpcf7 input, .wpcf7 textarea').removeAttr('style');
})

