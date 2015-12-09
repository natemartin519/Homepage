$(document).ready(function() {
    var $window = $(window);
    var $background = $('.background');
    var $fader = $('.fader');
    var topOffset = 50;
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

// wip example of how to fix menu issue (not working, did it run?)
// $(document).on('click.nav','.navbar-collapse.in',function(e) {
//     if( $(e.target).is('a') || $(e.target).is('button')) {
//         $(this).collapse('hide');
//     }
// });

// this could work too
//  $(document).on('click.nav','.navbar-collapse.in',function(e) {
//     if( $(e.target).is('a') ) {
//         $(this).removeClass('in').addClass('collapse');
//     }
// });

// third option <-this one
// $(document).on('click','.navbar-collapse.in',function(e) {
//     if( $(e.target).is('a') ) {
//         $(this).collapse('hide');
//     }
// });

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
    }
});
      // $(document).ready(function () {
      //   $(".navbar-nav li.trigger-collapse a").click(function(event) {
      //     $(".navbar-collapse").collapse('hide');
      //   });
      // });