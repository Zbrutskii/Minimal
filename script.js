// Darkmode switcher
// ============================================================================

const toggle = document.querySelector('dark-mode-toggle');
const body = document.body;
toggle.mode === 'dark' ? body.classList.add('dark') : body.classList.remove('dark');
toggle.addEventListener('colorschemechange', () => {
  body.classList.toggle('dark', toggle.mode === 'dark');
});


// Top bar slim
// ============================================================================

var $top_bar =   $('header');
    $(window).scroll(function(){
    if ($top_bar.hasClass('slim') == false && $(this).scrollTop() > 64 ){
        $top_bar.addClass('slim');
    }
    else if($(this).scrollTop() <= 64 ) {
        $top_bar.removeClass('slim');
    }
});


// Mobile menu
// ============================================================================

$('.mobile-nav-toggle').click(function(){
    $('body').toggleClass('fix');
    $('.mobile-nav-toggle').toggleClass('show');
    $('.mobile-menu').toggleClass('show');
});


// Autohide
// ============================================================================

var mainHeader = $('header'),
    secondaryNavigation = $('.cd-secondary-nav'),
    //this applies only if secondary nav is below intro section
    belowNavHeroContent = $('.sub-nav-hero'),
    headerHeight = mainHeader.height();

//set scrolling variables
var scrolling = false,
    previousTop = 0,
    currentTop = 0,
    scrollDelta = 10,
    scrollOffset = 64;

mainHeader.on('click', '.nav-trigger', function(event){
    // open primary navigation on mobile
    event.preventDefault();
    mainHeader.toggleClass('nav-open');
});

$(window).on('scroll', function(){
    if( !scrolling ) {
        scrolling = true;
        (!window.requestAnimationFrame)
            ? setTimeout(autoHideHeader, 500)
            : requestAnimationFrame(autoHideHeader);
    }
});

$(window).on('resize', function(){
    headerHeight = mainHeader.height();
});

function autoHideHeader() {
    var currentTop = $(window).scrollTop();

    ( belowNavHeroContent.length > 0 )
        ? checkStickyNavigation(currentTop)
        : checkSimpleNavigation(currentTop);

    previousTop = currentTop;
    scrolling = false;
}

function checkSimpleNavigation(currentTop) {
    if (previousTop - currentTop > scrollDelta) {
        mainHeader.removeClass('hidden');
    } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
        mainHeader.addClass('hidden');
    }
}
