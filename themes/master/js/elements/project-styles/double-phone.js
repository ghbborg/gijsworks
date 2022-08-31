/**
 * Project style - Double phone
 */

function initPS_DoublePhone() {
    if($('.double-phone')[0]) {
        console.log('hi');
        var doublePhone             = $('.double-phone');
        var doublePhonePos          = doublePhone.position();
        var doublePhoneY            = doublePhonePos.top;
        var doublePhoneHeight       = doublePhone.height();
        var doublePhoneTextHeight   = $('.double-phone .textbox').height();
        var phone1                  = $('.double-phone .phone-1');
        var phone2                  = $('.double-phone .phone-2');  
        var windowWidth             = $(window).width();
        $(window).scroll(function() {
            var scrolledDistance  = $(window).scrollTop();
            var scrollDifference  = scrolledDistance - doublePhoneY;

            // Desktop small (1024-1600)
            if (windowWidth > 1024 && windowWidth < 1600 && (scrolledDistance + 150) > (doublePhoneY) && scrolledDistance < (doublePhoneY + (doublePhoneHeight - doublePhoneTextHeight - 150))) {
                $('.double-phone .textbox').css('transform', 'translate3d(0, ' + ((scrolledDistance+150) - doublePhoneY) + 'px, 0)')
        
                phone1.css('transform', 'rotate(' + scrollDifference/100 + 'deg) translate(' + (scrollDifference/6)/16 + 'rem,-' + (scrollDifference/5)/16 +'rem) scale(' + (1 + scrollDifference/2000) + ')');
                
                phone2.css('transform', 'rotate(-' + scrollDifference/150 + 'deg) translate(-' + (scrollDifference/4)/16 + 'rem,-' + (scrollDifference/3)/16 +'rem) scale(' + (1 + scrollDifference/1700) + ')');
            }

            // Desktop large (+1600-1900px)
            if (windowWidth > 1600 && windowWidth < 1900 && (scrolledDistance + 150) > (doublePhoneY) && scrolledDistance < (doublePhoneY + (doublePhoneHeight - doublePhoneTextHeight - 150))) {
                $('.double-phone .textbox').css('transform', 'translate3d(0, ' + ((scrolledDistance+150) - doublePhoneY) + 'px, 0)')
        
                phone1.css('transform', 'rotate(' + scrollDifference/100 + 'deg) translate(' + (scrollDifference/6)/16 + 'rem,-' + (scrollDifference/5)/16 +'rem) scale(' + (1 + scrollDifference/2000) + ')');
                
                phone2.css('transform', 'rotate(-' + scrollDifference/150 + 'deg) translate(-' + (scrollDifference/2)/16 + 'rem,-' + (scrollDifference/8)/16 +'rem) scale(' + (1 + scrollDifference/1200) + ')');
            }

             // Desktop huge (+1900px)
             if (windowWidth > 1900 && (scrolledDistance + 150) > (doublePhoneY) && scrolledDistance < (doublePhoneY + (doublePhoneHeight - doublePhoneTextHeight - 150))) {
                $('.double-phone .textbox').css('transform', 'translate3d(0, ' + ((scrolledDistance+150) - doublePhoneY) + 'px, 0)')
        
                phone1.css('transform', 'rotate(' + scrollDifference/100 + 'deg) translate(' + (scrollDifference/6)/16 + 'rem,-' + (scrollDifference/5)/16 +'rem) scale(' + (1 + scrollDifference/2000) + ')');
                
                phone2.css('transform', 'rotate(-' + scrollDifference/150 + 'deg) translate(-' + (scrollDifference/2)/16 + 'rem,-' + (scrollDifference/2)/16 +'rem) scale(' + (1 + scrollDifference/1200) + ')');
            }


            // Mobile (-1024px)
            if (windowWidth < 1024 && (scrolledDistance) > (doublePhoneY-600) && (scrolledDistance < (doublePhoneY + (doublePhoneHeight - 400)))) {
                scrollDifference += 600;
                phone1.css('transform', 'rotate(' + scrollDifference/100 + 'deg) translate(' + (scrollDifference/12)/16 + 'rem,-' + (scrollDifference/3)/16 +'rem) scale(' + (1 + scrollDifference/2000) + ')');
                
                phone2.css('transform', 'rotate(-' + scrollDifference/150 + 'deg) translate(-' + (scrollDifference/4)/16 + 'rem,-' + (scrollDifference/3)/16 +'rem) scale(' + (1 + scrollDifference/1700) + ')');
            }

        })

        $(window).resize(function() {
            doublePhonePos          = doublePhone.position();
            doublePhoneY            = doublePhonePos.top;
            doublePhoneHeight       = doublePhone.height();
            doublePhoneTextHeight   = $('.double-phone .textbox').height();
            phone1                  = $('.double-phone .phone-1');
            phone2                  = $('.double-phone .phone-2');  
            windowWidth             = $(window).width();
        })
    }
}

initPS_DoublePhone();