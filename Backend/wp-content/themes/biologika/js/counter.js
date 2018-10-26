"use strict";
jQuery(document).ready(function ($) {
    var counter = $('.counter');
    if (counter.length) {
        counter.counterUp({
            delay: 10,
            time: 1000
        });
    }
});