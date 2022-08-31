/* Dynamic load */
/* -------------------------------------------- */

var currentPage = window.location.href;
window.history.replaceState("", "", currentPage);
var metaTitle, $page, pageName, currentPage, target, thisPage, nextPage, nextPageTitle;
var loading = false;
var initialLoaded = true;
var timer = 0;
var samePageDash = 4;
var navLink  = $('.menu-item')

//-------------- Dynamic clicks --------------//
$(document).on('click','.dynamic-link a, .nav-link', function(event){
    thisPage = window.location.href;
    nextPage = this.getAttribute('href');

    //Check if HREF target is on the same page
    if(nextPage != null && thisPage.split('/')[samePageDash] != nextPage.split('/')[samePageDash]) {
        event.preventDefault();

        if(!loading){
            var $this = $(this);
            loading = true;
            $(navLink).removeClass('current-menu-item');
            $('.menu-item a').removeClass('active');
            $(this).addClass('active');
            dynamicLoad($this.attr('href'), false, false);
        }
    } else {
        event.preventDefault();
    }
});

//-------------- Icon click --------------//
$(document).on('click','.navbar-brand', function(event){
    thisPage = window.location.href;
    nextPage = this.getAttribute('href');
    
    
    //Check if HREF target is on the same page
    if(nextPage != null && thisPage.split('/')[samePageDash] != nextPage.split('/')[samePageDash]) {
        event.preventDefault();

        if(!loading){
            var $this = $(this);
            loading = true;
            $(navLink).removeClass('current-menu-item');
            $('.menu-item a').removeClass('active');
            $('.home-link a').addClass('active');
            dynamicLoad($this.attr('href'), false, false);
        }
    } else {
        event.preventDefault();
    }
});

//------ Active history change ------//
window.onpopstate = function(event) {
    event.preventDefault();
    
    // If page is an anchor link (same page), return
    var temporaryLink   = String(window.location.href);
    if (temporaryLink.includes('#')) {
        return;
    }

    var currentScroll = document.documentElement.scrollTop;

    setTimeout(function(){
        $('html, body').animate({ scrollTop: currentScroll }, 0);
    }, 1);

    dynamicLoad(window.location.href, true, false);
};

//-------------- Get page HTML with Ajax --------------//
function dynamicLoad(target, interactedBack, initialLoaded){
    $.ajax({
        method: 'GET',
        url: target,
        beforeSend: function() {
            if(currentPage.split('//')[1] == target.split('//')[1]) {
                loading = true;
                return true;
            } else {
                dynamicLoader();
            }
        },
        success: function (data) {
            $page = $(data);
            $pageMain = $page.find("#main");
            metaTitle = $page.filter('title').text();
            $('head title').html(metaTitle);
            pageName = metaTitle.split(" – ")[0];
            footerClasses = $pageMain.attr('data-footer-classes');
            if(!interactedBack) window.history.pushState("", "", target);

            setTimeout(function(){
                $('main').replaceWith($pageMain[0].outerHTML);

                currentPage = target;
                initialLoaded = false;
            }, 350);

            $('html, body').scrollTop(0);
            windowY = 0;
        },
        error: function() {
            loading = false;
            window.location.href = siteUrl + '/page-not-found';
        },
        complete: function() {
            if (!initialLoaded) {
                setTimeout(function(){
                    initPage(pageName, initialLoaded);
                }, 350);
            }
        }
    });
}

//-------------- Reinitialize JS functions and update menu --------------//
function initPage(pageName, initialLoaded){
    if (initialLoaded == false) {

        initHomeHeader();
        initCustomCursor();
        initScroll();
        initPS_DoublePhone();
        initPS_DesktopWindows();

        $('.navbar .menu').html(pageName);
        $('.menu-item').removeClass('active');
        $('body').addClass('dom-rendered');


        $('.nav-link').each(function(){
            var $this = $(this);
            if($this.text() == pageName.split(" - ")[0]) $this.parent().addClass('active');
            if(currentPage.indexOf('project/') > 0 && $this.text() == 'Projects') $this.parent().addClass('active');
        });
        pageLoaded();
    }
}

//-------------- Loader --------------//
function dynamicLoader(){
    $('body').attr('id', 'dynamic-load').removeClass('dom-rendered');

    if (hamburgerToggled == false) {
        hamburger();
    } 
    
    pageTransition()
}

function pageTransition(){
    var dynamicSideBlock = $('.dynamic-sideblock');
    dynamicSideBlock.removeClass('hidden').addClass('animate-sideblock');
}

function pageLoaded() {
    setTimeout(function(){
        $('.dynamic-sideblock').removeClass('animate-sideblock');
    }, 0);
    setTimeout(function(){
        // Disable the loading delayed, this prevents users clicking links too fast breaking the transition.
        loading = false;
    }, 0);
}