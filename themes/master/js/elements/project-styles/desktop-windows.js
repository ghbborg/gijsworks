/**
 * Project style - Desktop windows
 */

function desktopWindows(index) {
    var fourWindows             = $('.desktop-windows-' + index + '');
    var fourWindowsPos          = fourWindows.position();
    var fourWindowsY            = fourWindowsPos.top;
    var fourWindowsHeight       = fourWindows.height();
    var fourWindowsTextHeight   = $('.desktop-windows-' + index + ' .textbox').height();
    var windowContainer1        = $('.desktop-windows-' + index + ' .window-container-1');
    var windowContainer2        = $('.desktop-windows-' + index + ' .window-container-2');  
    var windowWidth             = $(window).width();

    $(window).scroll(function() {
        let scrolledDistance  = $(window).scrollTop();
        let scrollDifference  = scrolledDistance - fourWindowsY;

        // Desktop  textbox
        if (windowWidth > 1024 && (scrolledDistance + 150) > (fourWindowsY) && scrolledDistance < (fourWindowsY + (fourWindowsHeight - fourWindowsTextHeight - 150))) {
            $('.desktop-windows-' + index + ' .textbox').css('transform', 'translate3d(0, ' + ((scrolledDistance+150) - fourWindowsY) + 'px, 0)');
        }

        // Desktop screens
        if (windowWidth > 1024 && (scrolledDistance + 400) > (fourWindowsY) && scrolledDistance < (fourWindowsY + (fourWindowsHeight - fourWindowsTextHeight - 150))) { 
            scrollDifference += 400;

            windowContainer1.css('transform', 'translate3d(-' + scrollDifference + 'px, 0 , 0)');
            windowContainer2.css('transform', 'translate3d(-' + (scrollDifference - 400)+ 'px, 0 , 0)');
        }

        // Mobile
        if (windowWidth < 1024 && (scrolledDistance) > (fourWindowsY-600) && (scrolledDistance < (fourWindowsY + (fourWindowsHeight - 400)))) {
            scrollDifference += 400;

            windowContainer1.css('transform', 'translate3d(-' + scrollDifference + 'px, 0 , 0)');
            windowContainer2.css('transform', 'translate3d(-' + (scrollDifference - 200)+ 'px, 0 , 0)');
        }
    })

    $(window).resize(function() {
        fourWindowsPos          = fourWindows.position();
        fourWindowsY            = fourWindowsPos.top;
        fourWindowsHeight       = fourWindows.height();
        fourWindowsTextHeight   = $('.desktop-windows-' + index + ' .textbox').height();
        windowContainer1        = $('.desktop-windows-' + index + ' .window-container-1');
        windowContainer2        = $('.desktop-windows-' + index + ' .window-container-2');  
        windowWidth             = $(window).width();
    })
}