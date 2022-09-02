/**
 * Projects
 */

function initProjects() {
  var categoryButton    = $('.category');
  var selectedCategory;

  categoryButton.click(function() {
    // Add active class to button
    categoryButton.removeClass('active');
    $(this).addClass('active');

    selectedCategory = $(this).attr('data-category');
    switchCategories(selectedCategory);
  })

  function switchCategories(selected) {
    if (selected == 'default') {
      $('.project-wrapper').addClass('active')
    } else {
      $('.project-wrapper').removeClass('active');
      $('.project-wrapper .project-overview[data-category="' + selected + '"]').parent().addClass('active');
    }

    setTimeout(function() {
      initProjectStyles();
    }, 600);
  }
}

initProjects();

