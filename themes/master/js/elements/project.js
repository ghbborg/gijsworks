/**
 * project
 */

function initProject() {
  var uspButton    = $('.usp');
  var selectedCategory;

  uspButton.click(function() {
    // Add active class to button
    uspButton.removeClass('active');
    $(this).addClass('active');
  })
}

initProject();

