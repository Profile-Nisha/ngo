/*-------------------------------------------------------------------*/
/* Project: Generosity - Charity, Fundraising & Non-Profit HTML5 Template */
/* Ver: 1.0.1*/
/* Date: 13-07-2018*/
/* Author: xenioushk*/
/*-------------------------------------------------------------------*/

jQuery(function ($) {
    "use strict";

    // DETECT TOUCH DEVICE

    function is_touch_device() {
        return (
            !!("ontouchstart" in window) ||
            (!!("onmsgesturechange" in window) &&
                !!window.navigator.maxTouchPoints)
        );
    }

    // ANIMATIONS //
    function animations() {
        animations = new WOW({
            boxClass: "wow",
            animateClass: "animated",
            offset: 120,
            mobile: false,
            live: true,
        });

        animations.init();
    }

    // ONE PAGE SMOOTH SCROLLING

    function smooth_scrolling() {
        $(".nav_menu").on("click", function () {
            if (
                location.pathname.replace(/^\//, "") ===
                    this.pathname.replace(/^\//, "") &&
                location.hostname === this.hostname
            ) {
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                var offset = $(".header-wrapper").outerHeight();

                if ($(".stuck").length === 1) {
                    offset = $(".stuck").outerHeight();
                } else {
                    offset = parseInt(offset, 0) + 24;
                }

                if (target.length) {
                    $("html,body").animate(
                        {
                            scrollTop:
                                target.offset().top - parseInt(offset, 0),
                        },
                        1300
                    );

                    return false;
                }
            }
        });
    }

    // PARALLAX

    if (typeof $.fn.stellar !== "undefined") {
        if (!is_touch_device()) {
            $(window).stellar({
                horizontalScrolling: false,
                verticalScrolling: true,
                responsive: true,
                verticalOffset: 50,
            });
        }
    }

    // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent =
            "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";

        _elem.each(function () {
            var $elem = $(this);
            var $animationType =
                "animated " + $elem.data("animation-" + _InOut);

            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }

    // SLIDER 1

    function slider_resize() {
        if ($(window).width() > 991) {
            $(".slider-content").first().attr("style", "margin-top: 0px;");
        } else {
            $(".slider-content").first().attr("style", "margin-top: 0px;");
        }
    }

    function hexToRgbA(hex, opacity) {
        var c;
        if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
            c = hex.substring(1).split("");
            if (c.length == 3) {
                c = [c[0], c[0], c[1], c[1], c[2], c[2]];
            }
            c = "0x" + c.join("");
            return (
                "rgba(" +
                [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(",") +
                "," +
                opacity +
                ")"
            );
        } else {
            return 'rgba("0,0,0,' + opacity + '")';
        }
    }

    if ($("#slider_1").length) {
        // BG & Color Settings.

        $("#slider_1")
            .find(".slider_item_container")
            .each(function () {
                var $this = $(this);

                var bg_img = "",
                    bg_color = "#000000",
                    bg_opacity = "0.1";

                if ($this.is("[data-bg_img]")) {
                    bg_img = ', url("' + $this.data("bg_img") + '")';
                }

                if ($this.is("[data-bg_color]")) {
                    bg_color = $this.data("bg_color");
                }

                if ($this.is("[data-bg_opacity]")) {
                    bg_opacity = $this.data("bg_opacity");
                }

                var $color_overlay = hexToRgbA(bg_color, bg_opacity);

                $this.attr(
                    "style",
                    "background:linear-gradient( " +
                        $color_overlay +
                        ",  " +
                        $color_overlay +
                        " )" +
                        bg_img +
                        "; background-position: center center; background-repeat: repeat; background-attachment: inherit; background-size: cover; overflow:hidden;"
                );
            });

        slider_resize();

        $(window).resize(function () {
            if ($(window).width() > 767) {
                slider_resize();
            } else {
                $(".slider-content").removeAttr("style");
            }
        });

        // Carousel.

        var $slider_1 = $("#slider_1");

        $slider_1.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 80000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    loop: true,
                },
                600: {
                    items: 1,
                    nav: false,
                    loop: true,
                },
                1000: {
                    items: 1,
                    dots: false,
                    nav: true,
                },
            },
            dots: false,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>",
            ],
        });

        var $slider_animation = $slider_1;

        // Fired before current slide change
        $slider_animation.on("change.owl.carousel", function (event) {
            var $currentItem = $(".owl-item", $slider_animation).eq(
                event.item.index
            );
            var $elemsToanim = $currentItem.find("[data-animation-out]");
            setAnimation($elemsToanim, "out");
        });

        // Fired after current slide has been changed
        $slider_animation.on("changed.owl.carousel", function (event) {
            var $currentItem = $(".owl-item", $slider_animation).eq(
                event.item.index
            );
            var $elemsToanim = $currentItem.find("[data-animation-in]");
            setAnimation($elemsToanim, "in");
        });
    }

    // BANNER.

    if ($(".section-banner").length) {
        $(".section-banner").each(function () {
            var $this = $(this);

            var bg_img = "images/home_1_slider_1.jpg",
                bg_color = "#000000",
                bg_opacity = "0.5",
                bg_color_2 = "#000000",
                bg_opacity_2 = "0.8";

            if ($this.is("[data-bg_img]")) {
                bg_img = ', url("' + $this.data("bg_img") + '")';
            } else {
                bg_img = ', url("' + bg_img + '")';
            }

            if ($this.is("[data-bg_color]")) {
                bg_color = $this.data("bg_color");
            }

            if ($this.is("[data-bg_opacity]")) {
                bg_opacity = $this.data("bg_opacity");
            }

            var $color_overlay = hexToRgbA(bg_color, bg_opacity);

            $color_overlay_2 = $color_overlay;

            if ($this.is("[data-gardient]") && $this.data("gardient") == true) {
                if ($this.is("[data-bg_color_2]")) {
                    bg_color_2 = $this.data("bg_color_2");
                }

                if ($this.is("[data-bg_opacity_2]")) {
                    bg_opacity_2 = $this.data("bg_opacity_2");
                }

                var $color_overlay_2 = hexToRgbA(bg_color_2, bg_opacity_2);
            }

            $this.attr(
                "style",
                "background:linear-gradient( " +
                    $color_overlay +
                    ",  " +
                    $color_overlay_2 +
                    " )" +
                    bg_img +
                    "; background-position: center center; background-repeat: repeat; background-attachment: inherit; background-size: cover; overflow:hidden;"
            );
        });
    }

    // STICKY HEADER & MENU

    if ($(".main-header").attr("data-sticky_header")) {
        $(".main-header .navbar-default").waypoint("sticky", {
            wrapper: '<div class="sticky-wrapper">',
            stuckClass: "stuck",
        });
    }

    // GALLERY.

    if ($(".gallery-light-box").length) {
        $(".gallery-light-box").venobox();
    }

    // FITERABLE GALLERY.

    $(".filter-button").on("click", function () {
        var value = $(this).attr("data-filter");

        if (value == "all") {
            //$('.filter').removeClass('hidden');
            $(".filter").show("1000");
        } else {
            //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
            //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter")
                .not("." + value)
                .hide("3000");
            $(".filter")
                .filter("." + value)
                .show("3000");
        }
    });

    // GALLERY CAROUSEL

    if ($(".gallery-carousel").length) {
        $(".gallery-carousel").each(function () {
            var $this = $(this);

            var items_val = 6,
                nav_val = false,
                autoplay_val = true,
                autoplaytimeout_val = 5000;

            // Status.
            if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
                return "";
            }

            // no of items

            if ($this.attr("data-items") && !isNaN($this.data("items"))) {
                items_val = $this.data("items");
            }

            // navigation status.

            if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
                nav_val = $this.data("nav");
            }
            //                alert(" "+nav_val);
            $this.owlCarousel({
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: items_val,
                        nav: nav_val,
                        dots: nav_val,
                        navText: [
                            "<i class='logo-nav-icon'></i>",
                            "<i class='logo-nav-icon'></i>",
                        ],
                        loop: true,
                    },
                },
            });

            //            $this.owlCarousel({
            //                items: 6,
            //                loop: true,
            //                autoplay: true,
            //                autoplayTimeout: 4000,
            //                autoplayHoverPause: true,
            //                responsive: {
            //                    0: {
            //                        items: 1,
            //                        nav: true
            //                    },
            //                    600: {
            //                        items: 3,
            //                        nav: false
            //                    },
            //                    1000: {
            //                        items: 4,
            //                        nav: true,
            //                        loop: true
            //                    }
            //                },
            //                nav: true,
            //                navText: ["<i class='logo-nav-icon'></i>", "<i class='logo-nav-icon'></i>"]
            //            });
            //
        });
    }

    // COUNTER

    if ($(".counter").length) {
        $(".counter").counterUp({
            delay: 10,
            time: 2000,
        });
    }

    // CLIENTS LOGOS

    if ($(".logo-items").length) {
        var $logo_items = $(".logo-items");

        $logo_items.each(function () {
            var $this = $(this);

            var items_val = 5,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 5000;

            // Status.
            if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
                $this.removeClass("owl-carousel");
                return "";
            }

            // no of items

            if ($this.attr("data-items") && !isNaN($this.data("items"))) {
                items_val = $this.data("items");
            }

            // navigation status.

            if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
                nav_val = $this.data("nav");
            }

            // navigation status.

            if ($this.attr("data-dots") && !isNaN($this.data("dots"))) {
                dots_val = $this.data("dots");
            }

            // Autoplay status.

            if ($this.attr("data-autoplay") && !isNaN($this.data("autoplay"))) {
                autoplay_val = $this.data("autoplay");
            }

            // Autoplay status.

            if (
                $this.attr("data-autoplaytimeout") &&
                !isNaN($this.data("autoplaytimeout"))
            ) {
                autoplaytimeout_val = $this.data("autoplaytimeout");
            }

            $this.owlCarousel({
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>",
                ],
                responsive: {
                    0: {
                        items: 2,
                        nav: false,
                    },
                    600: {
                        items: 3,
                        nav: false,
                    },
                    1000: {
                        items: items_val,
                    },
                },
            });
        });
    }

    // TESTIMONIAL CAROUSEL.

    if ($(".testimonial-container").length) {
        var $testimonial_container = $(".testimonial-container");

        $testimonial_container.each(function () {
            var $this = $(this);

            var items_val = 2,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 5000;

            // Status.
            if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
                $this.removeClass("owl-carousel");
                return "";
            }

            // no of items

            if ($this.attr("data-items") && !isNaN($this.data("items"))) {
                items_val = $this.data("items");
            }

            // navigation status.

            if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
                nav_val = $this.data("nav");
            }

            // navigation status.

            if ($this.attr("data-dots") && !isNaN($this.data("dots"))) {
                dots_val = $this.data("dots");
            }

            // Autoplay status.

            if ($this.attr("data-autoplay") && !isNaN($this.data("autoplay"))) {
                autoplay_val = $this.data("autoplay");
            }

            // Autoplay status.

            if (
                $this.attr("data-autoplaytimeout") &&
                !isNaN($this.data("autoplaytimeout"))
            ) {
                autoplaytimeout_val = $this.data("autoplaytimeout");
            }

            $this.owlCarousel({
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>",
                ],
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: items_val,
                    },
                },
            });
        });
    }

    // slider carousel

    jQuery(document).ready(function ($) {
        if ($(".slider-container").length) {
            var $testimonial_container = $(".slider-container");

            $testimonial_container.each(function () {
                var $this = $(this);

                // Retrieve data attributes
                var items_val = $this.data("items") || 1,
                    nav_val = $this.data("nav") || false,
                    dots_val =
                        $this.data("dots") !== undefined
                            ? $this.data("dots")
                            : true,
                    autoplay_val =
                        $this.data("autoplay") !== undefined
                            ? $this.data("autoplay")
                            : true,
                    autoplaytimeout_val = $this.data("autoplaytimeout") || 3000;

                // Initialize Owl Carousel
                $this.owlCarousel({
                    items: items_val,
                    loop: true,
                    autoplay: autoplay_val,
                    autoplayTimeout: autoplaytimeout_val,
                    autoplayHoverPause: true,
                    dots: dots_val,
                    nav: nav_val,
                    navText: [
                        "<i class='fa fa-angle-left'></i>",
                        "<i class='fa fa-angle-right'></i>",
                    ],
                    responsive: {
                        0: { items: 1, nav: false },
                        600: { items: 1, nav: false },
                        1000: { items: items_val },
                    },
                });
            });
        }
    });

    // TEAM CAROUSEL.

    if ($(".team-carousel").length) {
        var $team_carousel = $(".team-carousel");

        $team_carousel.each(function () {
            var $this = $(this);

            var items_val = 3,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 5000;

            // Status.
            if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
                $this.removeClass("owl-carousel");
                return "";
            }

            // no of items

            if ($this.attr("data-items") && !isNaN($this.data("items"))) {
                items_val = $this.data("items");
            }

            // navigation status.

            if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
                nav_val = $this.data("nav");
            }

            // navigation status.

            if ($this.attr("data-dots") && !isNaN($this.data("dots"))) {
                dots_val = $this.data("dots");
            }

            // Autoplay status.

            if ($this.attr("data-autoplay") && !isNaN($this.data("autoplay"))) {
                autoplay_val = $this.data("autoplay");
            }

            // Autoplay status.

            if (
                $this.attr("data-autoplaytimeout") &&
                !isNaN($this.data("autoplaytimeout"))
            ) {
                autoplaytimeout_val = $this.data("autoplaytimeout");
            }

            $this.owlCarousel({
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>",
                ],
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: items_val,
                    },
                },
            });
        });
    }

    // CAUSE CAROUSEL.

    if ($(".cause-container").length) {
        var $cause_container = $(".cause-container");

        $cause_container.each(function () {
            var $this = $(this);

            var items_val = 2,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 5000;

            // Status.
            if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
                $this.removeClass("owl-carousel");
                return "";
            }

            // no of items

            if ($this.attr("data-items") && !isNaN($this.data("items"))) {
                items_val = $this.data("items");
            }

            // navigation status.

            if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
                nav_val = $this.data("nav");
            }

            // navigation status.

            if ($this.attr("data-dots") && !isNaN($this.data("dots"))) {
                dots_val = $this.data("dots");
            }

            // Autoplay status.

            if ($this.attr("data-autoplay") && !isNaN($this.data("autoplay"))) {
                autoplay_val = $this.data("autoplay");
            }

            // Autoplay status.

            if (
                $this.attr("data-autoplaytimeout") &&
                !isNaN($this.data("autoplaytimeout"))
            ) {
                autoplaytimeout_val = $this.data("autoplaytimeout");
            }

            $this.owlCarousel({
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>",
                ],
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: items_val,
                    },
                },
            });
        });
    }

    if ($(".cause-container1").length) {
        var $cause_container = $(".cause-container1");

        $cause_container.each(function () {
            var $this = $(this);

            var items_val = 3,
                nav_val = false,
                dots_val = true,
                autoplay_val = true,
                autoplaytimeout_val = 5000;

            // Status.
            if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
                $this.removeClass("owl-carousel");
                return "";
            }

            // no of items

            if ($this.attr("data-items") && !isNaN($this.data("items"))) {
                items_val = $this.data("items");
            }

            // navigation status.

            if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
                nav_val = $this.data("nav");
            }

            // navigation status.

            if ($this.attr("data-dots") && !isNaN($this.data("dots"))) {
                dots_val = $this.data("dots");
            }

            // Autoplay status.

            if ($this.attr("data-autoplay") && !isNaN($this.data("autoplay"))) {
                autoplay_val = $this.data("autoplay");
            }

            // Autoplay status.

            if (
                $this.attr("data-autoplaytimeout") &&
                !isNaN($this.data("autoplaytimeout"))
            ) {
                autoplaytimeout_val = $this.data("autoplaytimeout");
            }

            $this.owlCarousel({
                items: items_val,
                loop: true,
                autoplay: autoplay_val,
                autoplayTimeout: autoplaytimeout_val,
                autoplayHoverPause: true,
                dots: dots_val,
                nav: nav_val,
                navText: [
                    "<i class='fa fa-angle-left'></i>",
                    "<i class='fa fa-angle-right'></i>",
                ],
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: items_val,
                    },
                },
            });
        });
    }

    // objective slider

    $(document).ready(function () {
        if ($(".cause-container2").length) {
            var $cause_container = $(".cause-container2");

            $cause_container.owlCarousel({
                items: 3, // Show 2 items on small screens
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                dots: true,
                nav: false,
                responsive: {
                    0: {
                        items: 3, // 2 items for mobile
                    },
                    600: {
                        items: 3, // Still 2 items for larger mobile screens
                    },
                    1000: {
                        items: 3, // 3 items for larger screens
                    },
                },
            });
        }
    });

    // LATEST NEWS

    if ($("#latest_news").length) {
        $("#latest_news").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                600: {
                    items: 2,
                    nav: false,
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: true,
                },
            },
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>",
            ],
        });
    }

    // GOOGLE MAP FOR CONTACT & EVENT PAGE.

    if ($("#map_canvas").length) {
        var map;

        $("#map_canvas").css({
            height: "400px",
        });

        map = new GMaps({
            div: "#map_canvas",
            lat: -12.043333,
            lng: -77.028333,
        });
    }

    // VENOBOX VIDEO.

    $(document).ready(function () {
        $(".venobox").venobox();
    });

    // COUNTDOWN.

    if ($("#coming_countdown").length > 0) {
        $("#coming_countdown").countdown("2020/10/10", function (event) {
            var $this = $(this).html(
                event.strftime(
                    "" +
                        '<div class="countdown_container"><span class="count_number">%d</span><span class="count_text">Days</span></div>' +
                        '<div class="countdown_container"><span class="count_number">%H</span><span class="count_text">Hours</span></div>' +
                        '<div class="countdown_container"><span class="count_number">%M</span><span class="count_text">Miniutes</span></div>' +
                        '<div class="countdown_container"><span class="count_number">%S</span><span class="count_text">Seconds</span></div>'
                )
            );
        });
    }

    // CONTACT FORM

    function email_checkRegexp(o, regexp) {
        if (!regexp.test(o.val())) {
            return false;
        } else {
            return true;
        }
    }

    if ($("#contact-form").length) {
        var $contact_form = $("#contact-form");

        var $contact_submit_btn = $contact_form.find("button.btn-custom");
        var $user_name = $contact_form.find("#user_name");
        var $user_email = $contact_form.find("#user_email");
        var $email_subject = $contact_form.find("#email_subject");
        var $email_message = $contact_form.find("#email_message");

        var emailRegex =
            /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        var $all_fields = $([])
            .add($user_name)
            .add($user_email)
            .add($email_subject)
            .add($email_message);

        $all_fields.val("");

        var $error_border = "border-bottom: 1px solid red;";
        var contact_form_bValid,
            user_name_bValid,
            user_email_bValid,
            user_email_subject_bValid,
            user_email_message_bValid;

        $contact_form.find("button[type=submit]").on("click", function () {
            contact_form_bValid = true;

            if ($user_name.val() === "") {
                user_name_bValid = false;
                $user_name.next("span").remove();
                $user_name
                    .attr("style", $error_border)
                    .after(
                        "<span class='error'>" +
                            $user_name.attr("data-msg") +
                            "</span>"
                    );
            } else {
                user_name_bValid = true;
                $user_name.removeAttr("style").next("span").remove();
            }

            contact_form_bValid = contact_form_bValid && user_name_bValid;

            if (
                $user_email.val() === "" ||
                email_checkRegexp($user_email, emailRegex) == false
            ) {
                user_email_bValid = false;
                $user_email.next("span").remove();
                $user_email
                    .attr("style", $error_border)
                    .after(
                        "<span class='error'>" +
                            $user_email.attr("data-msg") +
                            "</span>"
                    );
            } else {
                user_email_bValid = true;
                $user_email.removeAttr("style").next("span").remove();
            }

            contact_form_bValid = contact_form_bValid && user_email_bValid;

            if ($email_subject.val() === "") {
                user_email_subject_bValid = false;
                $email_subject.next("span").remove();
                $email_subject
                    .attr("style", $error_border)
                    .after(
                        "<span class='error'>" +
                            $email_subject.attr("data-msg") +
                            "</span>"
                    );
            } else {
                user_email_subject_bValid = true;
                $email_subject.removeAttr("style").next("span").remove();
            }

            contact_form_bValid =
                contact_form_bValid && user_email_subject_bValid;

            if ($email_message.val() === "") {
                user_email_message_bValid = false;
                $email_message.next("span").remove();
                $email_message
                    .attr("style", $error_border)
                    .after(
                        "<span class='error'>" +
                            $email_message.attr("data-msg") +
                            "</span>"
                    );
            } else {
                user_email_message_bValid = true;
                $email_message.removeAttr("style").next("span").remove();
            }

            contact_form_bValid =
                contact_form_bValid && user_email_message_bValid;

            if (contact_form_bValid === true) {
                $all_fields.attr("disabled", "disabled");
                $contact_submit_btn
                    .after("<span class='form_msg'>Please wait ....</span>")
                    .attr("disabled", "disabled");

                $.ajax({
                    url: "contact_email.php",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        safety_key: "dynatf",
                        user_name: $user_name.val(),
                        user_email: $user_email.val(),
                        email_subject: $email_subject.val(),
                        email_message: $email_message.val(),
                    },
                    success: function (data) {
                        if (data.status === 1) {
                            $contact_submit_btn.next("span").remove();
                            $contact_submit_btn.after(
                                "<span class='form_msg'>" + data.msg + "</span>"
                            );

                            setTimeout(function () {
                                $all_fields.removeAttr("disabled").val("");

                                $contact_submit_btn
                                    .next("span")
                                    .slideUp("slow", function () {
                                        $(this).remove();
                                        $contact_submit_btn.removeAttr(
                                            "disabled"
                                        );
                                    });
                            }, 3000);
                        } else {
                            $all_fields.removeAttr("disabled");
                        }
                    },
                    error: function (xhr, textStatus, e) {
                        alert("Email can not be sent. Please try again.");
                        return;
                    },
                });
            }

            return false;
        });
    }

    //WoW Animation.
    animations();

    //One Page Scrolling.
    smooth_scrolling();

    // BACK TO TOP BUTTON.

    if ($("#backTop").length === 1) {
        $("#backTop").backTop({
            theme: "custom",
        });
    }

    // PRELOADER

    $(window).on("load", function () {
        $("#preloader").fadeOut(500);
    });
});

function selectDonationType(type) {
    alert(`Selected donation type: ${type}`);
}

function selectAmount(amount) {
    alert(`Selected amount: ₹${amount}`);
}

function submitForm() {
    const purpose = document.getElementById("purpose").value;
    if (purpose === "") {
        alert("Please select a donation purpose.");
    } else {
        alert(
            `Thank you for your donation! You have selected to donate for: ${purpose}`
        );
    }
}

// $(document).ready(function(){
//   $('.top-slider').slick({
//     autoplay: true,
//     autoplaySpeed: 3000,
//     dots: true,
//     arrows: true,
//   });

//   $('.slider').slick({
//     autoplay: true,
//     autoplaySpeed: 3000,
//     dots: true,
//     arrows: true,
//   });
// });

if ($(".testimonial-container11").length) {
    var $testimonial_container = $(".testimonial-container11");

    $testimonial_container.each(function () {
        var $this = $(this);

        var items_val = 1,
            nav_val = false,
            dots_val = true,
            autoplay_val = true,
            autoplaytimeout_val = 5000;

        // Status.
        if ($this.attr("data-carousel") && $this.data("carousel") !== 1) {
            $this.removeClass("owl-carousel");
            return "";
        }

        // no of items

        if ($this.attr("data-items") && !isNaN($this.data("items"))) {
            items_val = $this.data("items");
        }

        // navigation status.

        if ($this.attr("data-nav") && !isNaN($this.data("nav"))) {
            nav_val = $this.data("nav");
        }

        // navigation status.

        if ($this.attr("data-dots") && !isNaN($this.data("dots"))) {
            dots_val = $this.data("dots");
        }

        // Autoplay status.

        if ($this.attr("data-autoplay") && !isNaN($this.data("autoplay"))) {
            autoplay_val = $this.data("autoplay");
        }

        // Autoplay status.

        if (
            $this.attr("data-autoplaytimeout") &&
            !isNaN($this.data("autoplaytimeout"))
        ) {
            autoplaytimeout_val = $this.data("autoplaytimeout");
        }

        $this.owlCarousel({
            items: items_val,
            loop: true,
            autoplay: autoplay_val,
            autoplayTimeout: autoplaytimeout_val,
            autoplayHoverPause: true,
            dots: dots_val,
            nav: nav_val,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>",
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                600: {
                    items: 1,
                    nav: false,
                },
                1000: {
                    items: items_val,
                },
            },
        });
    });
}

function selectDonationType(type, button) {
    document.querySelectorAll(".button-group button").forEach((btn) => {
        btn.classList.remove("active");
    });

    button.classList.add("active");
}

function selectAmount(amount) {
    const amountInput = document.getElementById("purposeAmount");
    if (amount === "other") {
        amountInput.value = "";
        amountInput.focus();
    } else {
        amountInput.value = amount;
    }

    document.querySelectorAll(".amount-btn").forEach((btn) => {
        btn.classList.remove("selected");
    });

    event.currentTarget.classList.add("selected");
}

function submitForm() {
    const amount = document.getElementById("purposeAmount").value;
    alert(`Donation of ₹${amount} will be processed.`);
}


let donationType = 'one-time'; 

function selectDonationType(type, button) {
    donationType = type;
    document.getElementById('donationType').value = donationType; 

   
    document.querySelectorAll('.button-group button').forEach(btn => {
        btn.classList.remove('active'); 
    });
    button.classList.add('active'); 
}

function selectAmount(amount) {
    const purposeAmountInput = document.getElementById('purposeAmount');
    if (amount === 'other') {
        purposeAmountInput.value = ''; 
    } else {
        purposeAmountInput.value = amount;
    }
}
function selectDonationType(type, button) {
    // Update the hidden input value
    document.getElementById('donationType').value = type;
    
    // Optional: Highlight the selected button
    document.querySelectorAll('.button-group button').forEach(btn => {
        btn.classList.remove('active'); // Remove active class from all buttons
    });
    button.classList.add('active'); // Add active class to the clicked button
}

function selectDonationType(type, button) {
    // Set the hidden input value to the selected type
    document.getElementById('donationType').value = type;

    // Optional: Highlight the selected button
    document.querySelectorAll('.button-group button').forEach(btn => {
        btn.classList.remove('active');
    });
    button.classList.add('active'); // Highlight the active button
}

function selectAmount(amount) {
    const purposeAmountInput = document.getElementById('purposeAmount');
    if (amount === 'other') {
        purposeAmountInput.value = ''; 
    } else {
        purposeAmountInput.value = amount;
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Get references to the checkboxes
    const allowPhotoCheckbox = document.getElementById('flexCheckAllow');
    const dontUsePhotoCheckbox = document.getElementById('flexCheckDontUse');

    // Handle "Allow photo" checkbox change
    allowPhotoCheckbox.addEventListener('change', function () {
        if (this.checked) {
            dontUsePhotoCheckbox.checked = false; // Uncheck the "Don't Use" checkbox
        }
    });

    // Handle "Don't use photo" checkbox change
    dontUsePhotoCheckbox.addEventListener('change', function () {
        if (this.checked) {
            allowPhotoCheckbox.checked = false; // Uncheck the "Allow" checkbox
        }
    });
});