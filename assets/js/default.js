$(document).ready(function() {
    var $window = $(window);
    var $background = $('.background');
    var $fader = $('.fader');
    var speedFactor = 4;

    function parallax() {
        var scrolled = ($window.scrollTop() / speedFactor);
        $background.css('transform', 'translateY(' + scrolled + 'px)');
        $fader.css('transform', 'translateY(' + (scrolled * 2) + 'px)');
    }

    function fader() {
        $fader.css('opacity', 1 - ($window.scrollTop() / 450));
    }


    $window.scroll(function(e) {
        parallax();
        fader();
    });
});

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
    }
});