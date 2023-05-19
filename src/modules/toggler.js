function toggler() {

    document.addEventListener('DOMContentLoaded', function () {
        'use strict';
        var link = document.querySelector('[data-toggle-menu]');
        link.addEventListener('click', function () {
            if (link.classList.contains('toggle-menu_clicked')) {
                link.classList.remove('toggle-menu_clicked');
            } else {
                link.classList.add('toggle-menu_clicked');
            }
        }, false);
    }, false);

    jQuery(document).ready(function ($) {
        $('.toggle-menu').click(function () {
            $('nav#navbar_top').toggleClass('collapsed');
        });
    });

} 

export default toggler;