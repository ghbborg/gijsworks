/**
 * Project styles
 */

 function initProjectStyles() {
    if ($('.project-wrapper')[0]) {
        // For portfolios page
        $('.project-wrapper').each(function(index, element) {
            if ($(element).hasClass('active') && $(element).children('.double-phone').length > 0) {
                doublePhone(index);
            } else if ($(element).hasClass('active') && $(element).children('.desktop-windows').length > 0) {
                desktopWindows(index);
            }
        });
    } else if ($('.project-overview')[0]) {
        // For project highlights page
        $('.project-overview').each(function(index, element) {
            if ($(element).hasClass('double-phone')) {
                doublePhone(index);
            } else if ($(element).hasClass('desktop-windows')) {
                desktopWindows(index);
            }
        });
    }
 }

 initProjectStyles();