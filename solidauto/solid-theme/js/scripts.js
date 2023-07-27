//   all ------------------

function initTowhub() {

    "use strict";

    //   loader ------------------

    jQuery(".loader-wrap").fadeOut(300, function () {

        jQuery("#main").animate({

            opacity: "1"

        }, 600);

    });

    //   Background image ------------------

    var a = jQuery(".bg");

    a.each(function (a) {

        if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");

    });

    //   swiper ------------------

    if (jQuery(".listing-slider").length > 0) {

        var lsw = new Swiper(".listing-slider .swiper-container", {

            preloadImages: false,

            slidesPerView: 4,

            spaceBetween: 15,

            loop: true,



            grabCursor: true,

            mousewheel: false,

            centeredSlides: true,

            pagination: {

                el: '.tc-pagination2',

                clickable: true,

                dynamicBullets: true,

            },

            navigation: {

                nextEl: '.listing-carousel-button-next2',

                prevEl: '.listing-carousel-button-prev2',

            },

            breakpoints: {

                1650: {

                    slidesPerView: 3,

                },

                1270: {

                    slidesPerView: 2,

                },

                850: {

                    slidesPerView: 1,

                },

            }

        });

    }

    if (jQuery(".category-carousel").length > 0) {

        var j2 = new Swiper(".category-carousel .swiper-container", {

            preloadImages: false,

            freeMode: true,

            slidesPerView: 'auto',

            spaceBetween: 10,

            loop: false,

            grabCursor: true,

            mousewheel: true,

            observer: true,

            observeParents: true,

            scrollbar: {

                el: '.hs_init',

                draggable: true,

            },

            navigation: {

                nextEl: '.cc-next',

                prevEl: '.cc-prev',

            },

        });

    }

    if (jQuery(".single-carousel").length > 0) {

        var j2 = new Swiper(".single-carousel .swiper-container", {

            preloadImages: false,

            freeMode: true,

            slidesPerView: 'auto',

            spaceBetween: 10,

            loop: false,

            grabCursor: true,

            mousewheel: false,

            observer: true,

            observeParents: true,

            navigation: {

                nextEl: '.sc-next',

                prevEl: '.sc-prev',

            },

        });

    }

    if (jQuery(".single-slider").length > 0) {

        var j2 = new Swiper(".single-slider .swiper-container", {

            preloadImages: false,

            slidesPerView: 1,

            spaceBetween: 0,

            loop: true,

            autoHeight: true,

            grabCursor: true,

            mousewheel: false,

            pagination: {

                el: '.ss-slider-pagination',

                clickable: true,

            },

            navigation: {

                nextEl: '.ss-slider-cont-next',

                prevEl: '.ss-slider-cont-prev',

            },

        });

    }

    if (jQuery(".listing-carousel").length > 0) {

        var j3 = new Swiper(".listing-carousel .swiper-container", {

            preloadImages: true,

            loop: true,

            grabCursor: true,

            speed: 1400,

            init: false,

            slidesPerView: 'auto',

            spaceBetween: 0,

            effect: "slide",

            mousewheel: false,

            pagination: {

                el: '.listing-carousel_pagination-wrap',

                clickable: true,

            },

            navigation: {

                nextEl: '.listing-carousel-button-next',

                prevEl: '.listing-carousel-button-prev',

            },

        });

		j3.init();

    }

    if (jQuery(".slider-widget").length > 0) {

        var j4 = new Swiper(".slider-widget .swiper-container", {

            preloadImages: false,

            loop: false,

            grabCursor: true,

            speed: 1400,



            slidesPerView: 1,

            spaceBetween: 10,

            effect: "slide",

            mousewheel: false,

            navigation: {

                nextEl: '.slider-widget-button-next',

                prevEl: '.slider-widget-button-prev',

            },

        });

    }

    if (jQuery(".hero-slider").length > 0) {

        var hs = new Swiper(".hero-slider .swiper-container", {

            preloadImages: false,

            loop: true,

            speed: 1400,

            autoplay: {

               delay: 15000,

               pauseOnMouseEnter: true

            },

            spaceBetween: 0,

            pagination: {

                el: '.listing-carousel_pagination-wrap',

                clickable: true,

            },



            navigation: {

                nextEl: '.slider-hero-button-next',

                prevEl: '.slider-hero-button-prev',

            },

        });



    }

    if (jQuery(".service-slider").length > 0) {

        var hs = new Swiper(".service-slider .swiper-container", {

            preloadImages: false,

            loop: true,

            speed: 1400,

            spaceBetween: 20,

            pagination: {

                el: '.listing-carousel_pagination-wrap-service',

                clickable: true,

            },



            navigation: {

                nextEl: '.slider-service-button-next',

                prevEl: '.slider-service-button-prev',

            },

        });



    }

    if (jQuery(".blog-slider").length > 0) {

        var hs = new Swiper(".blog-slider .swiper-container", {

            preloadImages: false,

            loop: true,

            speed: 1400,

            slidesPerView: 2,

            spaceBetween: 40,

            navigation: {

                nextEl: '.slider-blog-button-next',

                prevEl: '.slider-blog-button-prev',

            },

            breakpoints: {

                850: {

                    slidesPerView: 1,

                },

            }

        });



    }

    if (jQuery(".slideshow-container").length > 0) {

        var ms1 = new Swiper(".slideshow-container .swiper-container", {

            preloadImages: false,

            loop: true,

            speed: 1400,

            spaceBetween: 0,

            effect: "fade",

            autoplay: {

                delay: 3000,

                disableOnInteraction: false

            },

        });

        kpsc();

        ms1.on("slideChangeTransitionStart", function () {

            eqwe();

        });

        ms1.on("slideChangeTransitionEnd", function () {

            kpsc();

        });

    }

    function kpsc() {

        jQuery(".slide-progress").css({

            width: "100%",

            transition: "width 3000ms"

        });

    }

    function eqwe() {

        jQuery(".slide-progress").css({

            width: 0,

            transition: "width 0s"

        });

    };

    if (jQuery(".clients-carousel").length > 0) {

        var j2 = new Swiper(".clients-carousel .swiper-container", {

            preloadImages: false,

            freeMode: false,

            slidesPerView: 5,

            spaceBetween: 10,

            loop: true,

            grabCursor: true,

            mousewheel: false,

            navigation: {

                nextEl: '.cc-next',

                prevEl: '.cc-prev',

            },

            breakpoints: {

                1064: {

                    slidesPerView: 3,

                },

                768: {

                    slidesPerView: 2,

                },

                520: {

                    slidesPerView: 1,

                },

            }

        });

    }

    if (jQuery("#reviews .testimonilas-carousel").length > 0) {

        var j2 = new Swiper(".testimonilas-carousel .swiper-container", {

            preloadImages: false,

            slidesPerView: 3,

            spaceBetween: 20,

            loop: true,

            autoHeight: true,

            grabCursor: true,

            mousewheel: false,

            centeredSlides: true,

            pagination: {

                el: '.tc-pagination',

                clickable: true,

                dynamicBullets: false,

            },

            navigation: {

                nextEl: '.listing-carousel-button-next',

                prevEl: '.listing-carousel-button-prev',

            },

            breakpoints: {

                1064: {

                    slidesPerView: 2,

                },

                640: {

                    slidesPerView: 1,

                },

            }

        });

    }

    if (jQuery("#widget-testimonials .testimonilas-carousel").length > 0) {

        var j2 = new Swiper(".testimonilas-carousel .swiper-container", {

            preloadImages: false,

            slidesPerView: 2,

            spaceBetween: 20,

            loop: true,

            grabCursor: true,

            mousewheel: false,

            centeredSlides: true,

            pagination: {

                el: '.tc-pagination',

                clickable: true,

                dynamicBullets: false,

            },

            navigation: {

                nextEl: '.listing-carousel-button-next',

                prevEl: '.listing-carousel-button-prev',

            },

            breakpoints: {

                1064: {

                    slidesPerView: 2,

                },

                640: {

                    slidesPerView: 1,

                },

            }

        });

    }

    if (jQuery(".dashboard-header-stats").length > 0) {

        var j2 = new Swiper(".dashboard-header-stats .swiper-container", {

            preloadImages: false,

            freeMode: false,

            slidesPerView: 3,

            spaceBetween: 10,

            loop: false,

            grabCursor: true,

            mousewheel: false,



            navigation: {

                nextEl: '.dhs-next',

                prevEl: '.dhs-prev',

            },

            breakpoints: {

                768: {

                    slidesPerView: 2,

                },

                640: {

                    slidesPerView: 1,

                },

            }

        });

    }

    //   Isotope------------------

    function initIsotope() {

        if (jQuery(".gallery-items").length) {

            var ami = jQuery(".gallery-items").isotope({

                singleMode: true,



                itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",

                transformsEnabled: true,

                transitionDuration: "700ms",

                resizable: true

            });

            ami.imagesLoaded(function () {

                ami.isotope("layout");

            });

            jQuery(".gallery-filters").on("click", "a.gallery-filter", function (a) {

                a.preventDefault();

                var brec = jQuery(this).attr("data-filter");

                ami.isotope({

                    filter: brec

                });

                jQuery(".gallery-filters a").removeClass("gallery-filter-active");

                jQuery(this).addClass("gallery-filter-active");

            });

        }

        if (jQuery(".restor-menu-widget").length) {

            var aresm = jQuery(".restor-menu-widget").isotope({

                singleMode: true,

                itemSelector: ".restmenu-item",

                transformsEnabled: true,

                transitionDuration: "700ms",

                resizable: true

            });

            aresm.imagesLoaded(function () {

                aresm.isotope("layout");

            });

            jQuery(".menu-filters").on("click", "a", function (a) {

                a.preventDefault();

                var brec = jQuery(this).attr("data-filter");

                aresm.isotope({

                    filter: brec

                });

                jQuery(".menu-filters a").removeClass("menu-filters-active");

                jQuery(this).addClass("menu-filters-active");

            });

        }

    }

    initIsotope();

    //   lightGallery------------------

    jQuery(".image-popup").lightGallery({

        selector: "this",

        cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",

        download: false,

        counter: false

    });

    var o = jQuery(".lightgallery"),

        p = o.data("looped");

    o.lightGallery({

        selector: ".lightgallery a.popup-image",

        cssEasing: "cubic-bezier(0.25, 0, 0.25, 1)",

        download: false,

        loop: false,

        counter: false

    });

    function initHiddenGal() {

        jQuery(".dynamic-gal").on('click', function () {

            var dynamicgal = eval(jQuery(this).attr("data-dynamicPath"));

            jQuery(this).lightGallery({

                dynamic: true,

                dynamicEl: dynamicgal,

                download: false,

                loop: false,

                counter: false

            });



        });

    }

    initHiddenGal();

    jQuery("<span class='footer-bg-pin'></span>").duplicate(4).prependTo(".footer-bg");

    function heroAnim() {

        function a(a) {

            var b = a.length,

                c, d;

            while (b) {

                d = Math.floor(Math.random() * b--);

                c = a[b];

                a[b] = a[d];

                a[d] = c;

            }

            return a;

        }



        var b = jQuery(".footer-bg-pin");

        jQuery(a(b).slice(0, jQuery(".footer-bg").data("ran"))).each(function (a) {

            var bc = jQuery(this);

            b.removeClass("footer-bg-pin-vis")

            bc.addClass("footer-bg-pin-vis");



        });

    }

    setInterval(function () {

        heroAnim();

    }, 2000);

    jQuery(".lang-action li a").on('click', function (e) {

        e.preventDefault();

        var thdatlantext = jQuery(this).data("lantext");

        jQuery(".lang-action li a").removeClass("current-lan");

        jQuery(this).addClass("current-lan");

        jQuery(".show-lang span strong").text(thdatlantext);

    });

    jQuery(".category-carousel-item").on("click", function (e) {

        e.preventDefault();

        jQuery(this).toggleClass("checket-cat");

    });

    jQuery(".show-more-snopt").on("click", function (e) {

        e.preventDefault();

        jQuery(".show-more-snopt-tooltip").toggleClass("show-more-snopt-tooltip_vis");

    });

 // calc ------------------

    jQuery("form[name=rangeCalc]").jAutoCalc("destroy");

    jQuery("form[name=rangeCalc]").jAutoCalc({

        initFire: true,

        decimalPlaces: 1,

        emptyAsZero: false

    });

 // date picker------------------

    jQuery('input[name="datepicker-here"]').daterangepicker({

        autoUpdateInput: false,

        parentEl: jQuery(".date-container"),

        singleDatePicker: true,

        locale: {

            cancelLabel: 'Clear'

        }

    });

    jQuery('input[name="datepicker-here-time"]').daterangepicker({

        autoUpdateInput: false,

        parentEl: jQuery(".date-container2"),

        singleDatePicker: true,

        timePicker: true,

        locale: {

            cancelLabel: 'Clear'

        }

    });

    jQuery('input[name="datepicker-here-time"]').on('apply.daterangepicker', function (ev, picker) {

        jQuery(this).val(picker.startDate.format('MM/DD/YYYY hh:mm A'));

    });

    jQuery('input[name="datepicker-here-time"]').on('cancel.daterangepicker', function (ev, picker) {

        jQuery(this).val('');

    });

    jQuery('input[name="datepicker-here"]').on('apply.daterangepicker', function (ev, picker) {

        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));

    });

    jQuery('input[name="datepicker-here"]').on('cancel.daterangepicker', function (ev, picker) {

        jQuery(this).val('');

    });

    jQuery('input[name="dates"]').daterangepicker({

        autoUpdateInput: false,

        parentEl: jQuery(".date-container3"),

        locale: {

            cancelLabel: 'Clear'

        }

    });

    jQuery('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {

        jQuery(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));

    });

    jQuery('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {

        jQuery(this).val('');

    });

    //   appear------------------

    jQuery(".stats").appear(function () {

        jQuery(".num").countTo();

    });

    // Share   ------------------

     

    jQuery(".showshare").on("click", function (e) {

        e.preventDefault();

        navigator.clipboard.writeText(window.location.href);

        this.innerHTML = 'Ссылка скопирована!'

    });



    //   accordion ------------------

    jQuery(".accordion a.toggle").on("click", function (a) {

        a.preventDefault();

        jQuery(".accordion a.toggle").removeClass("act-accordion");

        jQuery(this).addClass("act-accordion");

        if (jQuery(this).next('div.accordion-inner').is(':visible')) {

            jQuery(this).next('div.accordion-inner').slideUp();

        } else {

            jQuery(".accordion a.toggle").next('div.accordion-inner').slideUp();

            jQuery(this).next('div.accordion-inner').slideToggle();

        }

    });

    //   tabs------------------

    jQuery(".tabs-menu a").on("click", function (a) {

        a.preventDefault();

        jQuery(this).parent().addClass("current");

        jQuery(this).parent().siblings().removeClass("current");

        var b = jQuery(this).attr("href");

        jQuery(this).parents(".tabs-act").find(".tab-content").not(b).css("display", "none");

        jQuery(b).fadeIn();

    });

    jQuery(".change_bg a").on("click", function () {

        var bgt = jQuery(this).data("bgtab");

        jQuery(".bg_tabs").css("background-image", "url(" + bgt + ")");

    });

    // twitter ------------------

    if (jQuery("#footer-twiit").length > 0) {

        var config1 = {

            "profile": {

                "screenName": 'envatomarket'

            },

            "domId": 'footer-twiit',

            "maxTweets": 4,

            "enableLinks": true,

            "showImages": false

        };

        twitterFetcher.fetch(config1);

    }

    //   Contact form------------------

    jQuery(document).on('submit', '#contactform', function () {

        var a = jQuery(this).attr("action");

        jQuery("#message").slideUp(750, function () {

            jQuery("#message").hide();

            jQuery("#submit").attr("disabled", "disabled");

            jQuery.post(a, {

                name: jQuery("#name").val(),

                email: jQuery("#email").val(),

                comments: jQuery("#comments").val()

            }, function (a) {

                document.getElementById("message").innerHTML = a;

                jQuery("#message").slideDown("slow");

                jQuery("#submit").removeAttr("disabled");

                if (null != a.match("success")) jQuery("#contactform").slideDown("slow");

            });

        });

        return false;

    });

    jQuery(document).on('keyup', '#contactform input, #contactform textarea', function () {

        jQuery("#message").slideUp(1500);

    });

    //   Video------------------

    var v = jQuery(".background-youtube-wrapper").data("vid");

    var f = jQuery(".background-youtube-wrapper").data("mv");

    jQuery(".background-youtube-wrapper").YTPlayer({

        fitToBackground: true,

        videoId: v,

        pauseOnScroll: true,

        mute: f,

        callback: function () {

            var a = jQuery(".background-youtube-wrapper").data("ytPlayer").player;

        }

    });

    var w = jQuery(".background-vimeo").data("vim"),

        bvc = jQuery(".background-vimeo"),

        bvmc = jQuery(".media-container"),

        bvfc = jQuery(".background-vimeo iframe "),

        vch = jQuery(".video-container");

    bvc.append('<iframe src="//player.vimeo.com/video/' + w + '?background=1"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>');

    jQuery(".video-holder").height(bvmc.height());

    if (jQuery(window).width() > 1024) {

        if (jQuery(".video-holder").length > 0)

            if (bvmc.height() / 9 * 16 > bvmc.width()) {

                bvfc.height(bvmc.height()).width(bvmc.height() / 9 * 16);

                bvfc.css({

                    "margin-left": -1 * jQuery("iframe").width() / 2 + "px",

                    top: "-75px",

                    "margin-top": "0px"

                });

            } else {

                bvfc.width(jQuery(window).width()).height(jQuery(window).width() / 16 * 9);

                bvfc.css({

                    "margin-left": -1 * jQuery("iframe").width() / 2 + "px",

                    "margin-top": -1 * jQuery("iframe").height() / 2 + "px",

                    top: "50%"

                });

            }

    } else if (jQuery(window).width() < 760) {

        jQuery(".video-holder").height(bvmc.height());

        bvfc.height(bvmc.height());

    } else {

        jQuery(".video-holder").height(bvmc.height());

        bvfc.height(bvmc.height());

    }

    vch.css("width", jQuery(window).width() + "px");

    vch.css("height", 720 / 1280 * jQuery(window).width()) + "px";

    if (vch.height() < jQuery(window).height()) {

        vch.css("height", jQuery(window).height() + "px");

        vch.css("width", 1280 / 720 * jQuery(window).height()) + "px";

    }

 // scroll animation ------------------

    jQuery(".scroll-init  ul ").singlePageNav({

        filter: ":not(.external)",

        updateHash: false,

        offset: 160,

        threshold: 150,

        speed: 1200,

        currentClass: "act-scrlink"

    });

    jQuery(".rate-item-bg").each(function () {

        jQuery(this).find(".rate-item-line").css({

            width: jQuery(this).attr("data-percent")

        });

    });

    jQuery(window).on("scroll", function (a) {

        if (jQuery(this).scrollTop() > 150) {

            jQuery(".to-top").fadeIn(500);



            jQuery(".clbtg").fadeIn(500);

        } else {

            jQuery(".to-top").fadeOut(500);

            jQuery(".clbtg").fadeOut(500);

        }

    });

    //   scroll to------------------

    jQuery(".custom-scroll-link").on("click", function () {

        var a = 90 + jQuery(".scroll-nav-wrapper").height();

        if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") || location.hostname === this.hostname) {

            var b = jQuery(this.hash);

            b = b.length ? b : jQuery("[name=" + this.hash.slice(1) + "]");

            if (b.length) {

                jQuery("html,body").animate({

                    scrollTop: b.offset().top - a

                }, {

                    queue: false,

                    duration: 1200,

                    easing: "easeInOutExpo"

                });

                return false;

            }

        }

    });

    // modal ------------------

    var modal = {};

    modal.hide = function () {

        jQuery('.modal , .modal-thanks , .reg-overlay').fadeOut(200);

        jQuery("html, body").removeClass("hid-body");

        jQuery(".modal_main").removeClass("vis_mr");

    };

    jQuery('.modal-open').on("click", function (e) {

        e.preventDefault();

        jQuery('.modal , .reg-overlay').fadeIn(200);

        jQuery(".modal_main").addClass("vis_mr");

        jQuery("html, body").addClass("hid-body");

    });

    jQuery('.close-reg , .reg-overlay, .close-modal').on("click", function () {

        modal.hide();

    });

    jQuery(".show_gcc").on("click", function (e) {

        e.preventDefault();

        jQuery(this).parents(".geodir-category-footer").find(".geodir-category_contacts").addClass("visgdcc");

    });

    jQuery(".close_gcc").on("click", function () {

        jQuery(this).parent(".geodir-category_contacts").removeClass("visgdcc");

    });

    // Header ------------------

    jQuery(".more-filter-option").on("click", function () {

        jQuery(".hidden-listing-filter").slideToggle(500);

        jQuery(this).find("span").toggleClass("mfilopact");

    });

    var headSearch = jQuery(".header-search"),

        ssbut = jQuery(".show-search-button"),

        wlwrp = jQuery(".header-modal"),

        wllink = jQuery(".show-header-modal"),

        mainheader = jQuery(".main-header");

    function showSearch() {

        headSearch.addClass("vis-head-search").removeClass("vis-search");

        ssbut.find("span").text("Close");

        ssbut.find("i").addClass("vis-head-search-close");

        mainheader.addClass("vis-searchdec");

        hideWishlist();

    }

    function hideSearch() {

        headSearch.removeClass("vis-head-search").addClass("vis-search");

        ssbut.find("span").text("Search");

        ssbut.find("i").removeClass("vis-head-search-close");

        mainheader.removeClass("vis-searchdec");

    }

    ssbut.on("click", function () {

        if (jQuery(".header-search").hasClass("vis-search")) showSearch();

        else hideSearch();

    });

    jQuery(".header-search_close").on("click", function () {

        hideSearch();

    });

    function showWishlist() {

        wlwrp.fadeIn(1).addClass("vis-wishlist").removeClass("novis_wishlist")

        hideSearch();

        wllink.addClass("scwllink");

    }

    function hideWishlist() {

        wlwrp.fadeOut(1).removeClass("vis-wishlist").addClass("novis_wishlist");

        wllink.removeClass("scwllink");

    }

    wllink.on("click", function () {

        if (wlwrp.hasClass("novis_wishlist")) showWishlist();

        else hideWishlist();

    });

    jQuery(".close-header-modal").on("click", function () {

        hideWishlist();

    });

    var wlitle = jQuery(".novis_wishlist .widget-posts li").length;

    jQuery(".header-modal-top h4 strong , .cart-btn span.cart-counter").text(wlitle);

    jQuery(".act-hiddenpanel").on("click", function () {

        jQuery(this).toggleClass("active-hidden-opt-btn").find("span").text(jQuery(this).find("span").text() === 'Close options' ? 'More options' : 'Close options');

        jQuery(".hidden-listing-filter").slideToggle(400);

    });

    // Forms ------------------

    jQuery(document).on('change', '.leave-rating input', function () {

        var $radio = jQuery(this);

        jQuery('.leave-rating .selected').removeClass('selected');

        $radio.closest('label').addClass('selected');

    });

    jQuery(document).on('click', '#features-field li label', function () {

        var $label = jQuery(this);

        $label.siblings('input').attr('checked', 'checked');

    });

    jQuery(".show-hidden-map").on("click", function (e) {

        e.preventDefault();

        jQuery(".show-hidden-map").find("span").text(jQuery(".show-hidden-map span").text() === 'Close' ? 'On The Map' : 'Close');

        jQuery(".hidden-map-container").slideToggle(400);

    });

    function showColumnhiddenmap() {

        if (jQuery(window).width() < 1064) {

            jQuery(".hid-mob-map").animate({

                right: 0

            }, 500, "easeInOutExpo").addClass("fixed-mobile");

        }

    }

    jQuery(".map-item , .schm").on("click", function (e) {

        e.preventDefault();

        showColumnhiddenmap();

    });

    jQuery('.map-close').on("click", function (e) {

        jQuery(".hid-mob-map").animate({

            right: "-100%"

        }, 500, "easeInOutExpo").removeClass("fixed-mobile");

    });

    jQuery(".show-list-wrap-search").on("click", function (e) {

        jQuery(".lws_mobile").slideToggle(400);

        jQuery(this).toggleClass("slsw_vis");

    });

	jQuery(".show-lpt").on("click", function (e) {

		e.preventDefault();

        jQuery(".lost-password-tootip").addClass("lpt_vis");

    });

	jQuery(".close-lpt").on("click", function () {

        jQuery(".lost-password-tootip").removeClass("lpt_vis");

    });

 

	//   Uplaod ------------------

	jQuery('.fuzone input').each(function () {

		jQuery(this).on('change', function () {

			var pufzone = jQuery(this).parents(".fuzone").find('.photoUpload-files');

			pufzone.empty();

			var files = jQuery(this)[0].files;

			for (var i = 0; i < files.length; i++) {

				jQuery("<span></span>").text(files[i].name).appendTo(pufzone);

			}

		});

	});

    jQuery(".submenu-link").on("click", function (ef) {

        ef.preventDefault();

        jQuery(this).toggleClass("sl_tog");

        jQuery(this).parent("li").find("ul").slideToggle(300);

    });

    jQuery(".eye").on("click touchstart", function () {

        var epi = jQuery(this).parent(".pass-input-wrap").find("input");

        if (epi.attr("type") === "password") {

            epi.attr("type", "text");

        } else {

            epi.attr("type", "password");

        }

    });

    jQuery(".tfp-btn").on("click", function () {

        jQuery(this).toggleClass("rot_tfp-btn");

        jQuery(".tfp-det").toggleClass("vis_tfp-det ");

    });

    jQuery(".dasboard-menu li").on({

        mouseenter: function () {



            jQuery(this).find("a").css({

                "color": "#666",

                "background": "#fff"

            });



        },

        mouseleave: function () {

            jQuery(this).find("a").css({

                "color": "#fff",

                "background": "none"

            });

        }

    });

// booking -----------------

    var current_fs, next_fs, previous_fs;

    var left, opacity, scale;

    var animating;

    jQuery(".next-form").on("click", function (e) {

        e.preventDefault();

        if (animating) return false;

        animating = true;

        current_fs = jQuery(this).parent();

        next_fs = jQuery(this).parent().next();

        jQuery("#progressbar li").eq(jQuery("fieldset").index(next_fs)).addClass("active");

        next_fs.show();

        current_fs.animate({

            opacity: 0

        }, {

            step: function (now, mx) {

                scale = 1 - (1 - now) * 0.2;

                left = (now * 50) + "%";

                opacity = 1 - now;

                current_fs.css({

                    'transform': 'scale(' + scale + ')',

                    'position': 'absolute'

                });

                next_fs.css({

                    'left': left,

                    'opacity': opacity,

                    'position': 'relative'

                });

            },

            duration: 1200,

            complete: function () {

                current_fs.hide();

                animating = false;

            },

            easing: 'easeInOutBack'

        });

    });

    jQuery(".back-form").on("click", function (e) {

        e.preventDefault();

        if (animating) return false;

        animating = true;

        current_fs = jQuery(this).parent();

        previous_fs = jQuery(this).parent().prev();

        jQuery("#progressbar li").eq(jQuery("fieldset").index(current_fs)).removeClass("active");

        previous_fs.show();

        current_fs.animate({

            opacity: 0

        }, {

            step: function (now, mx) {

                scale = 0.8 + (1 - now) * 0.2;

                left = ((1 - now) * 50) + "%";

                opacity = 1 - now;

                current_fs.css({

                    'left': left,

                    'position': 'absolute'

                });

                previous_fs.css({

                    'transform': 'scale(' + scale + ')',

                    'opacity': opacity,

                    'position': 'relative'

                });

            },

            duration: 1200,

            complete: function () {

                current_fs.hide();

                animating = false;

            },

            easing: 'easeInOutBack'

        });

    });

    jQuery('.faq-nav li a').on("click", function () {

        jQuery('.faq-nav li a').removeClass("act-faq-link");

        jQuery(this).addClass("act-faq-link");

    });

    jQuery('.tariff-toggle').on("click", function () {

        if (jQuery('#yearly-1').is(':checked')) {

            jQuery('.price-item').addClass('year-mont');

        }

        if (jQuery('#monthly-1').is(':checked')) {

            jQuery('.price-item').removeClass('year-mont');

        }

    });

    //   scrollToFixed------------------

    jQuery(".fixed-listing-header").scrollToFixed({

        minWidth: 1064,

        marginTop: 80,

        removeOffsets: true,



        limit: function () {

            var a = jQuery(".limit-box").offset().top - jQuery(".fixed-listing-header").outerHeight();

            return a;

        }

    });

    jQuery(".fixed-scroll-column-item").scrollToFixed({

        minWidth: 1064,

        marginTop: 200,

        removeOffsets: true,

        limit: function () {

            var a = jQuery(".limit-box").offset().top - jQuery(".fixed-scroll-column-item").outerHeight() - 46;

            return a;

        }

    });

    jQuery(".fix-map").scrollToFixed({

        minWidth: 1064,

        zIndex: 0,

        marginTop: 80,

        removeOffsets: true,

        limit: function () {

            var a = jQuery(".limit-box").offset().top - jQuery(".fix-map").outerHeight(true);

            return a;

        }

    });

    jQuery(".scroll-nav-wrapper").scrollToFixed({

        minWidth: 768,

        zIndex: 1112,

        marginTop: 80,

        removeOffsets: true,

        limit: function () {

            var a = jQuery(".limit-box").offset().top - jQuery(".scroll-nav-wrapper").outerHeight(true) - 50;

            return a;

        }

    });



    jQuery(".back-tofilters").scrollToFixed({

        minWidth: 1064,

        zIndex: 12,

        marginTop: 90,

        removeOffsets: true,



        limit: function () {

            var a = jQuery(".limit-box").offset().top - jQuery(".back-tofilters").outerHeight(true);

            return a;

        }

    });

    jQuery(".help-bar").scrollToFixed({

        minWidth: 1064,

        zIndex: 12,

        marginTop: 100,

        removeOffsets: true,

        limit: function () {

            var a = jQuery(".limit-box").offset().top - jQuery(".help-bar").outerHeight(true) - 60;

            return a;

        }

    });

    if (jQuery(".fixed-bar").outerHeight(true) < jQuery(".post-container").outerHeight(true)) {

        jQuery(".fixed-bar").addClass("fixbar-action");

        jQuery(".fixbar-action").scrollToFixed({

            minWidth: 1064,

            zIndex: 12,

            marginTop: function () {

                var a = jQuery(window).height() - jQuery(".fixed-bar").outerHeight(true) - 100;

                if (a >= 0) return 20;

                return a;

            },

            removeOffsets: true,

            limit: function () {

                var a = jQuery(".limit-box").offset().top - jQuery(".fixed-bar").outerHeight() - 60;

                return a;

            }

        });

    } else jQuery(".fixed-bar").removeClass("fixbar-action");

// filter show -----------------

    var shf = jQuery(".shsb_btn"),

        ahimcocn = jQuery(".anim_clw"),

        mapover = jQuery(".map-overlay , .close_sbfilters");

    function showhiddenfilters() {

        shf.removeClass("shsb_btn_act");

        ahimcocn.addClass("hidsb_act");

        mapover.fadeIn(200);

    }

    function hidehiddenfilters() {

        shf.addClass("shsb_btn_act");

        ahimcocn.removeClass("hidsb_act");

        mapover.fadeOut(200);

    }

    shf.on("click", function () {

        if (jQuery(this).hasClass("shsb_btn_act")) showhiddenfilters();

        else hidehiddenfilters();

    });

    mapover.on("click", function () {

        hidehiddenfilters();

    });

// niceselect -----------------

    jQuery(".url_btn").on("click", function (e) {

        e.preventDefault();

    });

    jQuery('.chosen-select').niceSelect();

// rangeslider -----------------

    jQuery(".range-slider").ionRangeSlider({

        type: "double",

        keyboard: true

    });

    jQuery(".rate-range").ionRangeSlider({

        type: "single",

        hide_min_max: true,

    });

    jQuery(".price-range").ionRangeSlider({

        type: "single",



        values: [

            "jQuery", "jQueryjQuery", "jQueryjQueryjQuery", "jQueryjQueryjQueryjQuery"

        ],

    });

//click -----------------

    jQuery('.toggle-filter-btn').on("click", function (e) {

        e.preventDefault();

        jQuery(this).toggleClass("tsb_act");

    });

    jQuery(".clear-singleinput").on("click", function (e) {

        jQuery(this).parents(".clact").find("input").val('');

    });

    jQuery('.init-dsmen').on("click", function () {

        jQuery(".user-profile-menu-wrap").slideToggle(400);

    });

// chat -----------------

    var chatwidwrap = jQuery(".chat-widget_wrap"),

        cahtwidbutton = jQuery(".chat-widget-button");



    function showChat() {

        cahtwidbutton.addClass("closechat_btn");

        chatwidwrap.fadeIn(500).removeClass("not-vis-chat");

    }

    function hideChat() {

        cahtwidbutton.removeClass("closechat_btn");

        chatwidwrap.fadeOut(500).addClass("not-vis-chat");

    }

    jQuery(".cwb").on("click", function (e) {

        e.preventDefault();

        if (chatwidwrap.hasClass("not-vis-chat")) {

            showChat();

        } else {

            hideChat();

        }

    });

    // Styles ------------------

    function csselem() {

        jQuery(".height-emulator").css({

            height: jQuery(".fixed-footer").outerHeight(true)

        });

        jQuery(".slideshow-container .swiper-slide").css({

            height: jQuery(".slideshow-container").outerHeight(true)

        });

        jQuery(".slider-container .slider-item").css({

            height: jQuery(".slider-container").outerHeight(true)

        });

        jQuery(".map-container.column-map").css({

            height: jQuery(window).outerHeight(true) - 80 + "px"

        });

        jQuery(".hidden-search-column-container").css({

            height: jQuery(window).outerHeight(true) - 70 + "px"

        });

    }

    csselem();

    // Mob Menu------------------

    jQuery(".nav-button-wrap").on("click", function () {

        jQuery(".main-menu").toggleClass("vismobmenu");

        jQuery(this).toggleClass("vismobmenu_btn");

    });

    function mobMenuInit() {

        var ww = jQuery(window).width();

        if (ww < 1054) {

            jQuery(".menusb").remove();

            jQuery(".main-menu").removeClass("nav-holder");

            jQuery(".main-menu nav").clone().addClass("menusb").appendTo(".main-menu");

            jQuery(".menusb").menu();

            jQuery(".map-container.fw-map.big_map.hid-mob-map").css({

                height: jQuery(window).outerHeight(true) - 110 + "px"

            });

        } else {

            jQuery(".menusb").remove();

            jQuery(".main-menu").addClass("nav-holder");

            jQuery(".map-container.fw-map.big_map.hid-mob-map").css({

                height: 550 + "px"

            });

        }

    }

    mobMenuInit();

    //   css ------------------

    var $window = jQuery(window);

    $window.on("resize", function () {

        csselem();

        mobMenuInit();

        if (jQuery(window).width() > 1064) {

            jQuery(".lws_mobile , .dasboard-menu-wrap").addClass("vishidelem");

            jQuery(".map-container.fw-map.big_map.hid-mob-map").css({

                "right": "0"

            });

            jQuery(".map-container.column-map.hid-mob-map").css({

                "right": "0"

            });

        } else {

            jQuery(".lws_mobile , .dasboard-menu-wrap").removeClass("vishidelem");

            jQuery(".map-container.fw-map.big_map.hid-mob-map").css({

                "right": "-100%"

            });

            jQuery(".map-container.column-map.hid-mob-map").css({

                "right": "-100%"

            });

        }

    });

    jQuery(".box-cat").on({

        mouseenter: function () {

            var a = jQuery(this).data("bgscr");

            jQuery(".bg-ser").css("background-image", "url(" + a + ")");

        }

    });

    jQuery(".header-user-name").on("click", function () {

        jQuery(".header-user-menu ul").toggleClass("hu-menu-vis");

        jQuery(this).toggleClass("hu-menu-visdec");

    });

    // Counter ------------------

    if (jQuery(".counter-widget").length > 0) {

        var countCurrent = jQuery(".counter-widget").attr("data-countDate");

        jQuery(".countdown").downCount({

            date: countCurrent,

            offset: 0

        });

    }

// open hours -----------------

    if (jQuery(".opening-hours").length > 0) {

        var d = new Date();

        var weekday = new Array(7);

        weekday[0] = "sun";

        weekday[1] = "mon";

        weekday[2] = "tue";

        weekday[3] = "wed";

        weekday[4] = "thu";

        weekday[5] = "fri";

        weekday[6] = "sat";

        document.getElementsByClassName(weekday[d.getDay()])[0].classList.add("todaysDay");

    }

// qty -----------------

    jQuery('.quantity-item').each(function () {

        var spinner = jQuery(this),

            input = spinner.find('input[type="text"]'),

            btnUp = spinner.find('.plus'),

            btnDown = spinner.find('.minus'),

            min = input.attr('data-min'),

            max = input.attr('data-max');

        btnUp.click(function () {

            var oldValue = parseFloat(input.val());

            if (oldValue >= max) {

                var newVal = oldValue;

            } else {

                var newVal = oldValue + 1;

            }

            spinner.find("input.qty").val(newVal);

            spinner.find("input.qty").trigger("change");

        });

        btnDown.click(function () {

            var oldValue = parseFloat(input.val());

            if (oldValue <= min) {

                var newVal = oldValue;

            } else {

                var newVal = oldValue - 1;

            }

            spinner.find("input.qty").val(newVal);

            spinner.find("input.qty").trigger("change");

        });

    });

    jQuery(".qty-dropdown-header").on("click", function () {

        jQuery(this).parent(".qty-dropdown").find(".qty-dropdown-content").slideToggle(400);

    });

// bubbles -----------------

    var bArray = [];

    var sArray = [2, 4, 6, 8];

    for (var i = 0; i < jQuery('.bubbles').width(); i++) {

        bArray.push(i);

    }

    function randomValue(arr) {

        return arr[Math.floor(Math.random() * arr.length)];

    }

    setInterval(function () {

        var size = randomValue(sArray);

        jQuery('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');

        jQuery('.individual-bubble').animate({

            'bottom': '100%',

            'opacity': '-=0.7'

        }, 4000, function () {

            jQuery(this).remove()

        });

    }, 350);

    if (jQuery(".col-list-wrap").hasClass("novis_to-top")) {

        jQuery(".to-top").remove().clone().addClass("to-top_footer").appendTo(".main-footer")

    }

    jQuery(".to-top , .to-top_footer").on("click", function (a) {

        a.preventDefault();

        jQuery("html, body").animate({

            scrollTop: 0

        }, 800);

        return false;

    });

}

//   Parallax ------------------

function initparallax() {

    var a = {

        Android: function () {

            return navigator.userAgent.match(/Android/i);

        },

        BlackBerry: function () {

            return navigator.userAgent.match(/BlackBerry/i);

        },

        iOS: function () {

            return navigator.userAgent.match(/iPhone|iPad|iPod/i);

        },

        Opera: function () {

            return navigator.userAgent.match(/Opera Mini/i);

        },

        Windows: function () {

            return navigator.userAgent.match(/IEMobile/i);

        },

        any: function () {

            return a.Android() || a.BlackBerry() || a.iOS() || a.Opera() || a.Windows();

        }

    };

    trueMobile = a.any();

    if (null === trueMobile) {

        var b = new Scrollax();

        b.reload();

        b.init();

    }

    if (trueMobile) jQuery(".bgvid , .background-vimeo , .background-youtube-wrapper ").remove();

}

// duplicate -----------------

jQuery.fn.duplicate = function (a, b) {

    var c = [];

    for (var d = 0; d < a; d++) jQuery.merge(c, this.clone(b).get());

    return this.pushStack(c);

};

//   Star Raiting ------------------

function cardRaining() {

    var cr = jQuery(".card-popup-raining");

    cr.each(function (cr) {

        var starcount = jQuery(this).attr("data-starrating");

        jQuery("<i class='fas fa-star'></i>").duplicate(starcount).prependTo(this);

    });

}

cardRaining();

function cardRaining2() {

    var cr2 = jQuery(".card-popup-rainingvis"),

        sts = jQuery(".price-level-item");

    cr2.each(function (cr) {

        var starcount2 = jQuery(this).attr("data-starrating2");

        jQuery("<i class='fas fa-star'></i>").duplicate(starcount2).prependTo(this);

    });

    sts.each(function (sts) {

        var pricecount = jQuery(this).attr("data-pricerating");

        jQuery("<strong>jQuery</strong>").duplicate(pricecount).prependTo(this);

    });

    jQuery("<div class='card-popup-rainingvis_bg'><div>").appendTo(".card-popup-rainingvis");

    jQuery("<span class='card-popup-rainingvis_bg_item'></span>").duplicate(5).prependTo(".card-popup-rainingvis_bg");

}

cardRaining2();

//   Dashboard ------------------

jQuery('.add-room-item').on('click', function (e) {

    e.preventDefault();

    var newElem = jQuery(this).parents(".add_room-item-wrap").find('.add_room-item').first().clone(),

        parclone = jQuery(this).parents(".add_room-item-wrap").find(".add_room-container");

    newElem.find('input').val('');

    newElem.appendTo(parclone);

    jQuery('.fuzone input').each(function () {



        jQuery(this).on('change', function () {



            var pufzone = jQuery(this).parents(".fuzone").find('.photoUpload-files');

            pufzone.empty();

            var files = jQuery(this)[0].files;

            for (var i = 0; i < files.length; i++) {



                jQuery("<span></span>").text(files[i].name).appendTo(pufzone);



            }



        });

    });

    jQuery(".remove-rp").on('click', function () {

        jQuery(this).parents(".add_room-item:not(:first-child)").remove();

    });

});

jQuery(".remove-rp").on('click', function () {

    jQuery(this).parents(".add_room-item").remove();

});

//  geo -----------------

jQuery(".location a , .loc-act").on("click", function (e) {

    e.preventDefault();

    jQuery.get("https://ipinfo.io", function (response) {

        jQuery(".location input").each(function () {

            jQuery(this).val(response.city);

        });

    }, "jsonp");

});

//  autocomplete -----------------

function initAutocomplete() {

    var acInputs = document.getElementsByClassName("autocomplete-input");

    for (var i = 0; i < acInputs.length; i++) {

        var autocomplete = new google.maps.places.Autocomplete(acInputs[i]);

        autocomplete.inputId = acInputs[i].id;

    }

}

//  listing height -----------------

jQuery(".dasboard-menu-btn").on("click", function () {

    jQuery(".dasboard-menu-wrap").slideToggle(500);

});

jQuery(".list-single-facts .inline-facts-wrap").matchHeight({});

jQuery(".listing-item").matchHeight({});

jQuery(".article-masonry").matchHeight({});

jQuery(".grid-opt li span").on("click", function () {

    jQuery(".listing-item").matchHeight({

        remove: true

    });

    setTimeout(function () {

        jQuery(".listing-item").matchHeight();

    }, 50);

    jQuery(".grid-opt li span").removeClass("act-grid-opt");

    jQuery(this).addClass("act-grid-opt");

    if (jQuery(this).hasClass("two-col-grid")) {

        jQuery(".listing-item").removeClass("has_one_column");

        jQuery(".listing-item").addClass("has_two_column");

    } else if (jQuery(this).hasClass("one-col-grid")) {

        jQuery(".listing-item").addClass("has_one_column");

    } else {

        jQuery(".listing-item").removeClass("has_one_column").removeClass("has_two_column");

    }

});

jQuery(".notification-close").on("click", function () {

    jQuery(this).parent(".notification").slideUp(500);

});

jQuery(".romms-select_header").on("click", function () {

	jQuery(this).toggleClass("vis-room_select")

    jQuery(this).parent(".romms-select_item").find(".romms-select_content").slideToggle(400);

});

 document.addEventListener('gesturestart', function (e) {

    e.preventDefault();

});



//   Init All ------------------

jQuery(document).ready(function () {

    initTowhub();

    initparallax();

});