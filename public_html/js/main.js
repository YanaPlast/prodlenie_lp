$(document).ready(function () {
    var menuMobile = document.querySelector(".mobile-menu"),
        elem,
        needed_height;
    if (document.querySelector(".user-actions__link.search") !== null) {
        document.querySelector(".user-actions__link.search").addEventListener("click", function () {
            document.querySelector(".page-search").classList.toggle("none");
            document.querySelector(".search svg").classList.toggle("none");
            document.querySelector(".user-actions__link.search").classList.toggle("close");
            if ($(".mobile-menu__icon").hasClass("none")) {
                menuMobile.classList.toggle("none");
                document.querySelector(".mobile-menu__icon").classList.toggle("none");
                document.querySelector(".user-actions__link.link__mobile-menu").classList.toggle("close");
            }
        });
    }
    if (document.querySelector(".user-actions__link.mob-search") !== null) {
        document.querySelector(".user-actions__link.mob-search").addEventListener("click", function () {
            document.querySelector(".page-search").classList.toggle("none");
            document.querySelector(".user-actions__link.mob-search svg").classList.toggle("none");
            document.querySelector(".user-actions__link.mob-search").classList.toggle("close");
            if (!$(menuMobile).hasClass("none")) {
                menuMobile.classList.toggle("none");
                document.querySelector(".user-actions__link.link__mobile-menu").classList.toggle("close");
            }
        });
    }
    if (document.querySelector(".link__mobile-menu") !== null) {
        document.querySelector(".link__mobile-menu").addEventListener("click", function () {
            menuMobile.classList.toggle("none");
            document.querySelector(".link__mobile-menu").classList.toggle("none");
            document.querySelector(".user-actions__link.link__mobile-menu").classList.toggle("close");
            if (!$(".page-search").hasClass("none")) {
                document.querySelector(".page-search").classList.toggle("none");
                document.querySelector(".user-actions__link.mob-search svg").classList.toggle("none");
                document.querySelector(".user-actions__link.mob-search").classList.toggle("close");
            }
        });
    }
    elem = document.querySelector(".header");
    if (elem !== null) {
        needed_height = elem.clientHeight;
        if (document.querySelector(".page-search") !== null) {
            document.querySelector(".page-search").style.top = needed_height + "px";
        }
    }
    window.addEventListener("resize", function () {
        var n = document.querySelector(".header"),
            t = n.clientHeight;
        document.querySelector(".page-search").style.top = t + "px";
    });
});
$(document).ready(function () {
    let $body = $("body");
    let $glob = {};
    $.fn.gOpenModal = function () {};
    let test = false;
    (function () {
        $body.on("click", ".faq__question", function () {
            let _ = $(this);
            _.toggleClass("extended").closest(".faq__question-wrap").find(".faq__text").slideToggle();
        });
    })();
    (function () {
        $body.on("click", ".n-faq__question", function () {
            let _ = $(this);
            _.toggleClass("extended").closest(".n-faq__question-wrap").find(".n-faq__text").slideToggle();
        });
    })();
    (function () {
        $body.on("click", ".reviews__btn-toggle-more", function () {
            let _ = $(this);
            _.toggleClass("extended").closest(".reviews__bottom").find(".reviews__text-more").slideToggle();
        });
    })();
    (function () {
        $body.on("click", ".gifts__question", function () {
            let _ = $(this);
            _.toggleClass("extended").closest(".gifts__accordion-item").find(".gifts__text").slideToggle();
        });
    })();
    function delayedResize(func, duration) {
        let statusResize = !0;
        $(window).on("resize", function () {
            if (statusResize) {
                statusResize = !1;
                setTimeout(function () {
                    func();
                    statusResize = !0;
                }, duration);
            }
        });
    }
    (function () {
        $glob.match = function (option) {
            let options = option;
            let elems = $(options.parent + " .js-match-height");
            let maxH = null;
            function destroy() {
                elems.css("minHeight", "");
            }
            destroy();
            setTimeout(function () {
                elems.each(function (index, elem) {
                    if (maxH < $(elem).outerHeight()) {
                        maxH = $(elem).outerHeight();
                    }
                });
                $body.outerWidth() > options.responsive[0].minWidth && elems.css("minHeight", maxH);
            }, 10);
        };
    })();
    (function () {
        $('a[href*="#"][data-scroll]:not([href="#"])').on("click", function () {
            if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    $("html,body").animate({ scrollTop: target.offset().top + 40 }, 1000);
                    return false;
                }
            }
        });
    })();
    (function () {
        $(".numbers").each(function () {
            let $this = $(this),
                count = 0;
            function numberWithSpaces(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            }
            $this.waypoint({
                handler: function handler(direction) {
                    if (direction === "down") {
                        if (count < 1) {
                            $(".numbers__number").each(function () {
                                let str = $(this).text();
                                str = str.replace(/\s/g, "");
                                $(this)
                                    .prop("Counter", 0)
                                    .animate(
                                        { Counter: str },
                                        {
                                            duration: 3000,
                                            easing: "linear",
                                            step: function step(now) {
                                                let num = numberWithSpaces(Math.ceil(now));
                                                $(this).text(num);
                                            },
                                        }
                                    );
                            });
                            count = count + 1;
                        }
                    }
                },
                offset: "70%",
            });
        });
    })();
    (function () {
        $glob.randomInteger = function (min, max) {
            let rand = min + Math.random() * (max + 1 - min);
            return Math.floor(rand);
        };
    })();
    function downloadFile(nameFile, path) {
        let dock = document.createElement("a");
        dock.download = nameFile;
        dock.href = path;
        dock.click();
    }
    (function () {
        $(".partners__slider").slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: !0,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
            slidesToShow: 7,
            speed: 200,
            dots: false,
            draggable: true,
            focusOnSelect: false,
            infinite: !0,
            pauseOnFocus: false,
            pauseOnHover: false,
            variableWidth: !1,
            adaptiveHeight: !1,
            swipeToSlide: true,
            appendArrows: $(".partners__arrows"),
            appendDots: $(".partners__dots"),
            responsive: [
                { breakpoint: 960, settings: { slidesToShow: 4 } },
                { breakpoint: 768, settings: { slidesToShow: 4 } },
                { breakpoint: 560, settings: { slidesToShow: 3 } },
            ],
        });
    })();
    (function () {
        $(".help__slider").slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
            slidesToShow: 3,
            speed: 200,
            dots: false,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            variableWidth: true,
            adaptiveHeight: true,
            swipeToSlide: true,
            appendArrows: $(".help__arrows"),
            appendDots: $(".help__dots"),
            responsive: [
                { breakpoint: 1215, settings: { slidesToShow: 2, dots: true } },
                { breakpoint: 640, settings: { slidesToShow: 1, dots: true } },
            ],
        });
        (function () {
            let options = { parent: ".help", responsive: [{ minWidth: 200, settings: { destroy: !0 } }] };
            function run() {
                $glob.match(options);
            }
            run();
            delayedResize(run, 300);
        })();
    })();
    (function () {
        $body.outerWidth() <= 960 && sliderInit();
        delayedResize(run, 300);
        function run() {
            $body.outerWidth() <= 960 ? sliderInit() : sliderDestroy();
            test && console.log("++");
        }
        function sliderInit() {
            !$(".steps__slider.slick-initialized").length &&
                $(".steps__slider").slick({
                    autoplay: false,
                    autoplaySpeed: 3000,
                    arrows: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
                    speed: 200,
                    dots: true,
                    draggable: true,
                    focusOnSelect: false,
                    infinite: false,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    variableWidth: true,
                    adaptiveHeight: false,
                    swipeToSlide: true,
                    appendArrows: $(".steps__arrows"),
                    appendDots: $(".steps__dots"),
                    responsive: [
                        { breakpoint: 960, settings: { slidesToShow: 2 } },
                        { breakpoint: 640, settings: { slidesToShow: 1 } },
                    ],
                });
        }
        function sliderDestroy() {
            $(".steps__slider.slick-initialized").length && $(".steps__slider").slick("unslick");
        }
    })();
    (function () {
        $(".tariffs__slider").slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
            slidesToShow: 3,
            dots: false,
            speed: 200,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            variableWidth: true,
            adaptiveHeight: false,
            swipeToSlide: true,
            appendArrows: $(".tariffs__arrows"),
            appendDots: $(".tariffs__dots"),
            responsive: [
                { breakpoint: 1500, settings: { slidesToShow: 3, variableWidth: false } },
                { breakpoint: 1150, settings: { slidesToShow: 2, variableWidth: false } },
                { breakpoint: 960, settings: { slidesToShow: 2, arrows: false, variableWidth: false, dots: true } },
                { breakpoint: 720, settings: { slidesToShow: 1, arrows: false, dots: true, variableWidth: false } },
            ],
        });
        (function () {
            let options = { parent: ".tariffs__slider", responsive: [{ minWidth: 200, settings: { destroy: !0 } }] };
            function run() {
                $glob.match(options);
            }
            run();
            delayedResize(run, 300);
        })();
    })();
    (function () {
        $(".n2-tariffs__slider").slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
            slidesToShow: 4,
            dots: false,
            speed: 200,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            variableWidth: false,
            adaptiveHeight: false,
            swipeToSlide: true,
            appendArrows: $(".n2-tariffs__arrows"),
            appendDots: $(".n2-tariffs__dots"),
            responsive: [
                { breakpoint: 1500, settings: { slidesToShow: 4 } },
                { breakpoint: 1160, settings: { slidesToShow: 2 } },
                { breakpoint: 960, settings: { slidesToShow: 2, arrows: false, dots: true } },
                { breakpoint: 700, settings: { slidesToShow: 1, arrows: false, dots: true } },
            ],
        });
        (function () {
            let options = { parent: ".n2-tariffs__slider", responsive: [{ minWidth: 180, settings: { destroy: !0 } }] };
            function run() {
                $glob.match(options);
            }
            run();
            delayedResize(run, 300);
        })();
    })();
    (function () {
        if (!$(".experience__grid").length) return;
        let flag = true;
        let windowHeight = $(window).height();
        let offset = $(".experience__grid").offset().top;
        function addSpacesForNumber(num) {
            return num
                .toString()
                .replace(/\s/g, "")
                .replace(/(\d)(?=(\d{3})+([^\d]|$))/g, "$1 ");
        }
        function removeSpacesForNumber(num) {
            return num.toString().replace(/\s/g, "");
        }
        function growDigit() {
            $(".experience__num").each(function () {
                let _ = $(this);
                let _num = +removeSpacesForNumber(_.text());
                _.animate(
                    { n: _num },
                    {
                        duration: 1000,
                        easing: "swing",
                        step: function (n) {
                            _.text(addSpacesForNumber(n.toFixed(0)));
                        },
                    }
                );
            });
        }
        $(document).on("scroll", function () {
            var documentScroll = $(document).scrollTop();
            if (documentScroll > offset - windowHeight + 50) {
                if (flag) {
                    growDigit();
                }
                flag = false;
            }
        });
    })();
    (function () {
        function selectedTariff() {
            let sum = 0;
            $(".return-money__item-inner input:checked").each(function (index, item) {
                sum += +$(item).val();
            });
            sum = sum
                .toString()
                .replace(/\s+/g, "")
                .replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
            $(".js-return-money__cost-tariffs").text(sum);
        }
        selectedTariff();
        $body.on("change", ".return-money__item-inner input", function () {
            let _ = $(this);
            _.closest(".return-money__item-inner").toggleClass("selected", _.is(":checked"));
            selectedTariff();
        });
    })();
    (function () {
        let options = { parent: ".return-money", responsive: [{ minWidth: 958, settings: { destroy: !0 } }] };
        function run() {
            $glob.match(options);
        }
        run();
        delayedResize(run, 300);
    })();
    (function () {
        $body.outerWidth() <= 960 && sliderInit();
        delayedResize(run, 300);
        function run() {
            $body.outerWidth() <= 960 ? sliderInit() : sliderDestroy();
            test && console.log("++");
        }
        function sliderInit() {
            !$(".why__slider.slick-initialized").length &&
                $(".why__slider").slick({
                    autoplay: false,
                    autoplaySpeed: 3000,
                    arrows: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
                    speed: 200,
                    dots: true,
                    draggable: true,
                    focusOnSelect: false,
                    infinite: false,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    variableWidth: true,
                    adaptiveHeight: false,
                    swipeToSlide: true,
                    appendArrows: $(".why__arrows"),
                    appendDots: $(".why__dots"),
                    responsive: [
                        { breakpoint: 960, settings: { slidesToShow: 1 } },
                        { breakpoint: 640, settings: { slidesToShow: 1 } },
                    ],
                });
        }
        function sliderDestroy() {
            $(".why__slider.slick-initialized").length && $(".why__slider").slick("unslick");
        }
    })();
    (function () {
        $body.outerWidth() <= 960 && sliderInit();
        delayedResize(run, 300);
        function run() {
            $body.outerWidth() <= 960 ? sliderInit() : sliderDestroy();
            test && console.log("++");
        }
        function sliderInit() {
            !$(".n-why__slider.slick-initialized").length &&
                $(".n-why__slider").slick({
                    autoplay: false,
                    autoplaySpeed: 3000,
                    arrows: false,
                    prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l"></use></svg></button>',
                    nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r"></use></svg></button>',
                    speed: 200,
                    dots: true,
                    draggable: true,
                    focusOnSelect: false,
                    infinite: false,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                    variableWidth: true,
                    adaptiveHeight: false,
                    swipeToSlide: true,
                    appendArrows: $(".n-why__arrows"),
                    appendDots: $(".n-why__dots"),
                    responsive: [
                        { breakpoint: 960, settings: { slidesToShow: 1 } },
                        { breakpoint: 640, settings: { slidesToShow: 1 } },
                    ],
                });
        }
        function sliderDestroy() {
            $(".n-why__slider.slick-initialized").length && $(".n-why__slider").slick("unslick");
        }
    })();
    (function () {
        $(".reviews__slider").slick({
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: true,
            prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-l3"></use></svg></button>',
            nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><svg class="icon-el"><use xlink:href="#arrow-r3"></use></svg></button>',
            slidesToShow: 2,
            dots: false,
            draggable: true,
            focusOnSelect: false,
            infinite: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            variableWidth: false,
            adaptiveHeight: false,
            swipeToSlide: true,
            appendArrows: $(".reviews__arrows"),
            appendDots: $(".reviews__dots"),
            responsive: [
                { breakpoint: 960, settings: { slidesToShow: 2, arrows: false, dots: true } },
                { breakpoint: 768, settings: { slidesToShow: 1, arrows: false, dots: true } },
                { breakpoint: 450, settings: { slidesToShow: 1, arrows: false, dots: true } },
            ],
        });
    })();
    (function () {
        new TypeIt(".intro__title span", {
            strings: ["на товарный знак", "на промышленный образец", "на изобретение"],
            autoStart: true,
            speed: 50,
            lifeLike: true,
            breakLines: false,
            startDelay: 50,
            nextStringDelay: [3000, 100],
            cursorSpeed: 1000,
            loop: true,
            loopDelay: [100, 3000],
        }).go();
    })();
    (function () {
        $(".js-scroll-add-cls-20:visible").scroolly([
            { from: "el-top=bottom -7vp", to: "el-bottom=top", addClass: "animate", onScroll: function ($el, $offset, $length, $rule) {}, onCheckIn: function ($el, $rule) {}, onTopOut: function ($el, $rule) {} },
        ]);
        $(".js-scroll-add-cls-10:visible").scroolly([
            { from: "el-top=bottom -10vp", to: "el-bottom=top", addClass: "animate", onScroll: function ($el, $offset, $length, $rule) {}, onCheckIn: function ($el, $rule) {}, onTopOut: function ($el, $rule) {} },
        ]);
    })();
    if (typeof njBox !== "undefined") {
        $("[data-open-gifts-modal-content]").each(function () {
            let _ = $(this);
            let content = $(_.data("open-gifts-modal-content"));
            new njBox({ elem: _, content: content, scrollbar: "show", close: "inside", class: "gifts-modal-overlay", backdrop: false });
        });
    }
});
$(function () {
    function selectedTariff() {
        var sum = 0;
        $(".calculate__item input:checked").each(function (index, item) {
            sum += +$(item).val();
        });
        sum = sum
            .toString()
            .replace(/\s+/g, "")
            .replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 ");
        $("#js-return-money__cost-tariffs").text(sum);
    }
    selectedTariff();
    $(".calculate__item").on("change", function () {
        selectedTariff();
    });
});

// всплывающее окно

$(".fancybox").fancybox();

var clickEvent = document.ontouchstart !== null ? 'click' : 'touchstart';

// проверка форм на ошибки
    $('.form-container form').on('submit', function (e) {
        var formId = $(this).find('input[name="title"]').val();
        var arrayOpt = [],
            pattern = /([<>'"#])+/i,
            itsOK = true,
            check = true;

        if (formId == "Map") {

            if ($(this).find('input[name="email"]').val() == "") {
                $mail = $(this).find('input[name="email"]');
                $mail.closest('label').addClass('error');
                $mail.val('Вы не ввели ' + $mail.data('hint'));
                check = false;
                e.preventDefault();
            }

        } else {

            $phone_num = $(this).find('input[name="phone"]').val().replace(/\D+/g, "");  
            
            if ($phone_num.length < 11) {
                $phone = $(this).find('input[name="phone"]');
                $phone.closest('label').addClass('error');
                $phone.val('Введите корректный номер');
                check = false;
                e.preventDefault();
            }

            /*        $(this).find('input:not([type="submit"])').each(function(index) {
                        if($(this).val() == "") {
                            $(this).closest('label').addClass('error');
                            $(this).val('Вы не ввели ' + $(this).data('hint'));
                            check = false;
                            e.preventDefault();
                        }
                    });*/

        }

        if ($(this).find('input[name="name_family"]').val() !== '') {
            check = false;
        }

        if (check == true) {
            var oldval = $(this).find('input[type="submit"]').val();
            $(this).find('input[type="submit"]').val("Подождите...");
            $(this).find('input[type="submit"]').attr("disabled", "disabled");
            setTimeout(function() {
                $(this).find('input[type="submit"]').removeAttr("disabled");
                $(this).find('input[type="submit"]').val(oldval);
            }, 6000);
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({'event': formId});
            console.log('event', formId);

            $.close_flag = true; // не показываем всплывашку, если отправлена заявка
        }

    });

    // убираем сообщение об ошибке на форме при установке курсора
    $('.form-container form input:not([type="submit"])').on(clickEvent, function () {
        if ($(this).closest('label').hasClass('error')) {
            $(this).val('');
            $(this).closest('label').removeClass('error');
        }

    });