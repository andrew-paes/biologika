"use strict";
// Initialize affix and add an offset to add affix class on scroll
var mainNav = $('#mainNav');
if (mainNav.length) {
    mainNav.affix({
        offset: {
            top: 100
        }
    });
}
