$(document).ready(function() {
    var $window = $(window);
    var $background = $('.background');
    var $fader = $('.fader');
    var topOffset = 50;
    var speedFactor = 4;

    function parallax() {
        var scrolled = ($window.scrollTop() / speedFactor) + topOffset;
        $background.css('top', (scrolled) + 'px');
    }

    function fader() {
        $fader.css({'opacity' : 1 - ($window.scrollTop() / 325)});
    }

    $window.scroll(function(e) {
        parallax();
        fader();
    });
});