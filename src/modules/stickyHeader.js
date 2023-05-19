function stickyHeader() {

    jQuery(document).ready(function($) {

        var $navbar = $('#navbar_top');
        var navbarHeight = $navbar.outerHeight();
        var scrollPosition = $(window).scrollTop();

        // Show the navbar on page load if at the top
        if (scrollPosition === 0) {
            $navbar.removeClass('hidden').addClass('fixed');
        }

        $(window).scroll(function () {
            scrollPosition = $(window).scrollTop();

            // Show the navbar when the user scrolls back up to the top
            if (scrollPosition === 0) {
                $navbar.removeClass('hidden').addClass('fixed');
            }

            // Fade out the navbar when the user scrolls down 50px
            if (scrollPosition > navbarHeight) {
                $navbar.removeClass('fixed').addClass('hidden');
            }

            // Fade in the navbar as a sticky menu after scrolling down 50px
            if (scrollPosition > navbarHeight + 300) {
                $navbar.removeClass('hidden').addClass('sticky');
            } else {
                $navbar.removeClass('sticky');
            }
        });
    });

} 

export default stickyHeader;

