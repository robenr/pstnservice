/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('owl.carousel');
    window.WOW = require('wowjs').WOW;
} catch (e) {}

//import 'owl.carousel';
//import WOW from 'wowjs'


$(document).ready(function () {

    jQuery('.anime').addClass('wow fadeInUp');
    let wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: false,
        live: true
    });
    wow.init();

    // fixed top header
    jQuery(window).scroll(function () {
        var bnnr_hei = $('.owl-stage-outer').height();
        var sticky = $('.navbar'),
            scroll = $(window).scrollTop();
        if (scroll >= bnnr_hei)
            sticky.addClass('fixed');
        else
            sticky.removeClass('fixed');
    });

    jQuery('.menu-link').click(function () {
        menulink.toggleClass('active');
        $('#navbarResponsive').toggleClass('show');
        return false;
    });

});

! function () {
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
        if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
            t.factory = function (e) {
                return function () {
                    var n = Array.prototype.slice.call(arguments);
                    return n.unshift(e), t.push(n), t;
                };
            }, t.methods.forEach(function (e) {
                t[e] = t.factory(e);
            }), t.load = function (t) {
                var e = 3e5,
                    n = Math.ceil(new Date() / e) * e,
                    o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
            };
    }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('h6p4auf7z8ym');
