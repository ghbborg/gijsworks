/**
 * Project style - Desktop windows
 */

function initPS_DesktopWindows() {
    if($('.desktop-windows-1')[0]) {
        desktopWindows(1)
    }
    if($('.desktop-windows-2')[0]) {
        desktopWindows(2)
    }

}

function desktopWindows(index) {
    console.log(index);
    var fourWindows             = $('.desktop-windows-' + index + '');
    var fourWindowsPos          = fourWindows.position();
    var fourWindowsY            = fourWindowsPos.top;
    var fourWindowsHeight       = fourWindows.height();
    var fourWindowsTextHeight   = $('.desktop-windows-' + index + ' .textbox').height();
    var windowContainer1        = $('.desktop-windows-' + index + ' .window-container-1');
    var windowContainer2        = $('.desktop-windows-' + index + ' .window-container-2');  
    var windowWidth             = $(window).width();
    $(window).scroll(function() {
        var scrolledDistance  = $(window).scrollTop();
        var scrollDifference  = scrolledDistance - fourWindowsY;

        // Desktop  textbox
        if (windowWidth > 1024 && (scrolledDistance + 150) > (fourWindowsY) && scrolledDistance < (fourWindowsY + (fourWindowsHeight - fourWindowsTextHeight - 150))) {
            $('.desktop-windows-' + index + ' .textbox').css('transform', 'translate3d(0, ' + ((scrolledDistance+150) - fourWindowsY) + 'px, 0)');
        }

        // Desktop screens
        if (windowWidth > 1024 && (scrolledDistance + 400) > (fourWindowsY) && scrolledDistance < (fourWindowsY + (fourWindowsHeight - fourWindowsTextHeight - 150))) { 
            scrollDifference += 400;

            windowContainer1.css('transform', 'translateX(-' + scrollDifference + 'px)');
            windowContainer2.css('transform', 'translateX(-' + (scrollDifference - 400)+ 'px)');
        }

        // Mobile
        if (windowWidth < 1024 && (scrolledDistance) > (fourWindowsY-600) && (scrolledDistance < (fourWindowsY + (fourWindowsHeight - 400)))) {
            scrollDifference += 400;

            windowContainer1.css('transform', 'translateX(-' + scrollDifference + 'px)');
            windowContainer2.css('transform', 'translateX(-' + (scrollDifference - 200)+ 'px)');
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

initPS_DesktopWindows();