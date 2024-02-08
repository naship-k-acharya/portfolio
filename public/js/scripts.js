/**
 * Created by seanmcdonnell on 3/14/17.
 */

if ($(window).width() > 768) {
    var $sec1 = $('.my-work__section--1'),
        $sec2 = $('.my-work__section--2'),
        $sec3 = $('.my-work__section--3'),
        $sec4 = $('.my-work__section--4'),
        $sec5 = $('.my-work__section--5'),
        $secHero = $('.my-work__section--hero'),
        $static1 = $('.static1'),
        $static2 = $('.static2'),
        $static3 = $('.static3'),
        $static4 = $('.static4'),
        $static5 = $('.static5');

    $(window).on('load, scroll', function () {
        sectionOne();
        sectionTwo();
        sectionThree();
        sectionFour();
        sectionFive();
    });

    function sectionOne() {
        var divBottom = ($sec1.height() + $secHero.height() - $(window).height() + 101) - $(window).scrollTop();
        var divTop = $sec1.offset().top - $(window).scrollTop();

        if (divTop <= 0) {
            $static1.addClass('fixed');
        } else if (divTop > 0) {
            $static1.removeClass('fixed');
        }

        if (divBottom <= 0) {
            $static1.addClass('bottom-zero');
        } else if (divBottom > 0) {
            $static1.removeClass('bottom-zero');
        }
    }

    function sectionTwo() {
        var divBottom2 = ($sec2.height() + $sec1.height() + $secHero.height() - $(window).height() + 101) - $(window).scrollTop();
        var divTop2 = $sec2.offset().top - $(window).scrollTop();

        if (divTop2 <= 0) {
            $static2.addClass('fixed');
        } else if (divTop2 > 0) {
            $static2.removeClass('fixed');
        }

        if (divBottom2 <= 0) {
            $static2.addClass('bottom-zero');
        } else if (divBottom2 > 0) {
            $static2.removeClass('bottom-zero');
        }
    }

    function sectionThree() {
        var divBottom3 = ($sec3.height() + $sec2.height() + $sec1.height() + $secHero.height() - $(window).height() + 101) - $(window).scrollTop();
        var divTop3 = $sec3.offset().top - $(window).scrollTop();

        if (divTop3 <= 0) {
            $static3.addClass('fixed');
        } else if (divTop3 > 0) {
            $static3.removeClass('fixed');
        }

        if (divBottom3 <= 0) {
            $static3.addClass('bottom-zero');
        } else if (divBottom3 > 0) {
            $static3.removeClass('bottom-zero');
        }
    }

    function sectionFour() {
        var divBottom4 = ($sec4.height() + $sec3.height() + $sec2.height() + $sec1.height() + $secHero.height() - $(window).height() + 101) - $(window).scrollTop();
        var divTop4 = $sec4.offset().top - $(window).scrollTop();

        if (divTop4 <= 0) {
            $static4.addClass('fixed');
        } else if (divTop4 > 0) {
            $static4.removeClass('fixed');
        }

        if (divBottom4 <= 0) {
            $static4.addClass('bottom-zero');
        } else if (divBottom4 > 0) {
            $static4.removeClass('bottom-zero');
        }
    }

    function sectionFive() {
        var divBottom5 = ($sec5.height() + $sec4.height() + $sec3.height() + $sec2.height() + $sec1.height() + $secHero.height() - $(window).height() + 101) - $(window).scrollTop();
        var divTop5 = $sec5.offset().top - $(window).scrollTop();

        if (divTop5 <= 0) {
            $static5.addClass('fixed');
        } else if (divTop5 > 0) {
            $static5.removeClass('fixed');
        }

        if (divBottom5 <= 0) {
            $static5.addClass('bottom-zero');
        } else if (divBottom5 > 0) {
            $static5.removeClass('bottom-zero');
        }
    }
}