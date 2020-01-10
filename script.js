// Darkmode switcher
// ============================================================================

const toggle = document.querySelector('dark-mode-toggle');
const body = document.body;
toggle.mode === 'dark' ? body.classList.add('dark') : body.classList.remove('dark');
toggle.addEventListener('colorschemechange', () => {
  body.classList.toggle('dark', toggle.mode === 'dark');
});


// Top bar on scroll
// ============================================================================

$('.mobile-nav-toggle').click(function(){
    $('.mobile-nav-toggle').toggleClass('show');
    $('.mobile-menu').toggleClass('show');
});
