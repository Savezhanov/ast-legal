$(window).mousemove(function(e) {
    var change;
    var xpos = e.clientX;
    var ypos = e.clientY;
    var left = change * 1;
    var xpos = xpos * 1;
    ypos = ypos * 1;
    $('.parallax').css('top', ((0 + (ypos / 100)) + "px"));
    $('.parallax').css('right', ((0 + (xpos / 100)) + "px"));
    $('.parallax2').css('top', ((0 + (ypos / 100)) + "px"));
    $('.parallax2').css('left', ((0 + (xpos / 100)) + "px"))
    $('.parallax3').css('bottom', ((0 + (ypos / 100)) + "px"));
    $('.parallax3').css('left', ((0 + (xpos / 100)) + "px"))
});

$(document).ready(function () {

    var checks = 1;
    $("body").on("click",".n-news-button a",function(e){
        e.preventDefault();
        // var h2 = $(this).parents('.pagination').parent('.finance-right').find('.finance-right-item');
        var text = $(this);
        if(checks == 1){
            checks = 0;
            $('.finance-right-item').animate({height: $('.finance-right-item').get(0).scrollHeight}, 1000, function(){$('.finance-right-item').height('auto');});
                text.text('Закрыть');

        }else {
            checks = 1;
            $('.finance-right-item').animate({height: '18em'});
            text.text('Читать дальше');
        }


    });

    //Send phone number, phone button main page
    $('#call-modal button').click(function (e) {
        e.preventDefault();
        var name=$("#name").val();
        var phone=$("#phone").val();
        var error=0;
        if(phone == "")
        {
            $("#phone").css("background", "#D66161");
            error++;
        }
        if( error==0)
        {
            Send(name,phone);
        }
    });

    function Send(name,phone) {
        $.ajax({
            type:"POST",
            url:"../mail.php",
            data:{name:name,phone:phone},
            success:function(){
                $(this).hide();
                $('form.form').css('visibility', 'hidden').promise().done(function () {
                    $('.result3').fadeIn(200)
                })
            }
        });
    }




    $('.add-theme button').click(function (e) {
        e.preventDefault();
        $(this).hide();
        $('.add-theme form').css('visibility', 'hidden').promise().done(function () {
            $('#fm-1').fadeIn(0)
        })
    });

    $('.add-forum button').click(function (e) {
        e.preventDefault();
        $(this).hide();
        $('.add-forum form').css('visibility', 'hidden').promise().done(function () {
            $('#fm-2').fadeIn(0)
        })
    });

    $('.response-forum button').click(function (e) {
        e.preventDefault();
        $(this).hide();
        $('.response-forum form').css('visibility', 'hidden').promise().done(function () {
            $('#fm-3').fadeIn(0)
        })
    });

    var url = window.location.href;
    $(".menu-item").each(function () {
        var href = $(this).find("a").attr("href");
        if (url.indexOf(href) + 1) {
            $(this).addClass('active');
        }
    });

    $('#popup__toggle').click(function () {
        $('.black-bg').show();
        $('#call-modal').fadeIn().addClass('animated fadeInDown');
    });
    $('.black-bg').click(function () {
        $('.black-bg').hide();
        $('#call-modal').fadeOut(0);
    });
    $('.close').click(function () {
        $('.black-bg').hide();
        $('#call-modal').fadeOut(0);
        $('.add-forum-theme').fadeOut(0);
        $('.i-call2').fadeOut(0);
        $('.i-call form').fadeOut(0);
    })
    $(".dropdown-con a").each(function () {
        var href = $(this).attr("href");
        if (url.indexOf(href) + 1) {
            $(this).addClass('active');
            $(this).parents('.menu-item').addClass('active');
        }
    });


    $( ".doc-menu-con a, .finance-menu a" ).hover(
        function() {
            $( this ).addClass('hover');
        }, function() {
            $( this ).removeClass('hover');
        }
    );
    $( ".laws-right-item" ).hover(
        function() {
            $( this ).find('img').attr('src', '/media/img/after3.png');
        }, function() {
            $( this ).find('img').attr('src', '/media/img/after2.png');
        }
    );


    $( ".forum-left .show-1" ).click(function() {
            $(this).fadeOut().promise().done(function () {
                $('.forum-left .hide-1').fadeIn().css('display', 'flex');
            })
            $('ul.forum-theme').animate({height: $('ul.forum-theme').get(0).scrollHeight
            }, 500, function(){
                $('ul.forum-theme').height('auto');
            });
        }
    );
    $( ".forum-left .hide-1" ).click(function() {
            $(this).fadeOut().promise().done(function () {
                $('.forum-left .show-1').fadeIn();
            })
            $('ul.forum-theme').animate({height: "22.3em"}, 500)
        }
    );
    $( ".show-1" ).click(function() {
        $(this).fadeOut().promise().done(function () {
            $('.hide-1').fadeIn().css('display', 'flex');
        })
        $('ul.group3').animate({height: $('ul.group3').get(0).scrollHeight
        }, 1000, function(){
            $('ul.group3').height('auto');
        });
    }
    );
    $( ".hide-1" ).click(function() {
            $(this).fadeOut().promise().done(function () {
                $('.show-1').fadeIn();
            })
        $('ul.group3').animate({height: "13.2em"}, 500)
        }
    );
    $( ".show-2" ).click(function() {
            $(this).fadeOut().promise().done(function () {
                $('.hide-2').fadeIn().css('display', 'flex');
            })
        $('ul.group4').animate({height: $('ul.group4').get(0).scrollHeight
        }, 500, function(){
            $('ul.group4').height('auto');
        });
        }
    );
    $( ".hide-2" ).click(function() {
            $(this).fadeOut().promise().done(function () {
                $('.show-2').fadeIn();
            })
        $('ul.group4').animate({height: "13.2em"}, 500)
        }
    );

    $( ".finance-menu a" ).click(function(e) {
        var id = $(this).data('id');
        e.preventDefault();
        $( ".finance-menu a" ).removeClass('active');
        if(!$(this).hasClass('active')){
            $(this).addClass('active')
        }
        $(".box-scroll").fadeOut(0).promise().done(function () {
               $('#box-' + id).fadeIn();
        })
        }
    );



//forum////////////////////////
    var click = false;
    $( ".all-view a" ).click(function(e) {
        if (click == false){
            $(this).text('Свернуть отзывы');
            click = true;
        }
        else {
            $(this).text('Посмотреть все отзывы');
            click = false;
        }
            e.preventDefault();
            var id = $(this).data('id');
            $('#responses-' + id).slideToggle();
        }
    );
    $( ".forum-title button" ).click(function() {
            $('.black-bg').fadeIn(0);
            $('.add-forum').fadeIn().addClass('animated fadeInDown');
        }
    );
    $( ".res-button" ).click(function() {
            $('.black-bg').fadeIn(0);
            $('.response-forum').fadeIn().addClass('animated fadeInDown');;
        }
    );
    $( ".forum-left-title span" ).click(function() {
            $('.black-bg').fadeIn(0);
            $('.add-theme').fadeIn().addClass('animated fadeInDown');;
        }
    );
    $( ".black-bg" ).click(function() {
            $('.black-bg').fadeOut(0);
            $('.add-forum-theme').fadeOut(0);
        }
    );
    $( ".theme-close" ).click(function(e) {
        e.preventDefault();
        $('.black-bg').fadeOut(0);
        $('.add-forum-theme').fadeOut(0);
        }
    );



    $( ".news-block a" ).hover(
        function() {
            $( this ).parent('.news-block').css('border-color', '#0e3d5e').addClass('box1').find('.news-img').css('border-color', '#0e3d5e');
            $( this ).parent('.news-block').find('.news-img').find('img').css('filter', 'grayscale(100%)');
        }, function() {
            $( this ).parent('.news-block').css('border-color', '#00b7f4').removeClass('box1').find('.news-img').css('border-color', '#00b7f4');
            $( this ).parent('.news-block').find('.news-img').find('img').css('filter', 'none');
        }
    );


    $( ".doc-open-full .close" ).click(function() {
            $('.doc-open-full').fadeOut().promise().done(function () {
                $('.doc-open').fadeIn();
            })
        }
    );
    //mobile
    if ($(window).width() < 950) {
        var clicked = 0;
        $('#not').click(function (e) {
            e.preventDefault();
            if(clicked == 0){
                $('.dropdown').fadeIn().removeClass('animated fadeOut').addClass('animated fadeIn');
                clicked = 1;
            }else{
                $('.dropdown').fadeOut().removeClass('animated fadeIn').addClass('animated fadeOut');
                clicked = 0
            }

        })

        $('.change a').click(function (e) {
            e.preventDefault()

        });
        $('.i-call2 button').click(function (e) {
            e.preventDefault();
            $('.result-b').fadeIn()
        });
        $('.i-call button').click(function (e) {
            e.preventDefault();
            $('.result2').fadeIn()
        });
        $('.l-flex-item').click(function () {
            $('.l-flex-item').removeClass('active');
            $(this).addClass('active');
        });

        $( ".mobile-select.forum-select select" ).change(function() {
                var id = $('.mobile-select.forum-select select option:selected').data('id');
                $('.doc-open').fadeOut(0);
                $(".forum-container").fadeOut().promise().done(function () {
                    $('#forum-' + id).fadeIn();
                })
            }
        );

        $( ".mobile-laws.articles-select select" ).change(function() {
                var id = $('.mobile-laws.articles-select select option:selected').data('id');
                $(".news-center-box").fadeOut().promise().done(function () {
                    $('#articles-' + id).fadeIn().css('display', 'flex');
                });
            }
        );


        $( ".mobile-select select" ).change(function() {
                var id = $('.mobile-select select option:selected').data('id');
                $('.doc-open').fadeOut(0);
                $('.doc-open-full').fadeOut(0);
                $(".doc-right-content").fadeOut(0).promise().done(function () {
                    $('#doc-' + id).fadeIn().css('display', 'flex');
                })
            }
        );



        $( ".back" ).click(function() {
                $('.back').css('opacity', '0')
                $('.doc-open').fadeOut().promise().done(function () {
                    $('.doc-right-content').fadeIn();
                })
            }
        );

        $( ".finance-id a" ).click(function(e) {
                var id = $(this).data('id');
                e.preventDefault();
                $('.back').css('opacity', '1');
                $('.finance').fadeOut();
                $(".finance-right").fadeOut().promise().done(function () {
                    $('#finance-' + id).fadeIn();
                })
            }
        );

        $( ".finance-right .back" ).click(function(e) {
                $('.back').css('opacity', '0');
                $(".finance-right").fadeOut().promise().done(function () {
                    $('.finance').fadeIn();
                })
            }
        );

        $( ".service-box-item" ).click(function() {
                $(".service-box-item").removeClass('active');
                if($('.service-arr').hasClass('active')){
                    $('.service-arr').not($(this).find('.service-arr')).removeClass('active');
                }
                $(this).find('.service-arr').toggleClass('active');

                var id = $(this).data('id');
                $('.mobile-dropdown').slideUp();
                if($('#mobile-dropdown-id-' + id).hasClass('active')){
                    $('#mobile-dropdown-id-' + id).removeClass('active').slideUp();
                }
                else if(!$('#mobile-dropdown-id-' + id).hasClass('active')){
                    $('#mobile-dropdown-id-' + id).addClass('active').slideDown();
                    if($('#mobile-dropdown-id-' + id).addClass('active').slideDown()){
                        $('.mobile-dropdown').not($('#mobile-dropdown-id-' + id)).removeClass('active');}
                }
                $(this).addClass('active');
            }
        );
        if ($('button').hasClass('animate2 btn-5')){
            $('button').removeClass('animate2 btn-5');
        }
        var s_click = false;
        $('.m-search-button').click(function () {
            $('.m-share-button').css('filter', 'invert(0)');
            if (s_click == false){
                $('.header-top .social-icons').hide();
                $('.phone').hide();
                $('.search').slideDown();
                s_click = true;
                $(this).css('filter', 'invert(1)');
            }else{
                $('.header-top .social-icons').hide();
                $('.search').slideUp().promise().done(function () {
                    $('.phone').show();
                });
                s_click = false;
                $(this).css('filter', 'invert(0)');
            }
        });
        var s_click2 = false;
        $('.m-share-button').click(function () {
            $('.m-search-button').css('filter', 'invert(0)');
            if (s_click2 == false){
                $('.search').hide();
                $('.phone').hide();
                $('.header-top .social-icons').slideDown().css('display', 'flex');
                s_click2 = true;
                $(this).css('filter', 'invert(1)');
            }else{
                $('.search').hide();
                $('.header-top .social-icons').slideUp().promise().done(function () {
                    $('.phone').show();
                });
                s_click2 = false;
                $(this).css('filter', 'invert(0)');
            }
        });

        $('.dalee').click(function () {
            $('.dalee').hide().css('display', 'none!important');
            $('.dalee-text').slideToggle();


        });
        $('.m-js').click(function (e) {
            e.preventDefault();
            $('.i-call2').fadeIn().removeClass('animated bounceOut').addClass('animated bounceIn');
            $('.black-bg').show();
        })
        $('.m-js2').click(function (e) {
            e.preventDefault();
            $('.i-call form').fadeIn().removeClass('animated bounceOut').addClass('animated bounceIn');
            $('.black-bg').show();
        })
        $('.logo a').click(function (e) {
            e.preventDefault();
            $('.menu').fadeIn().removeClass('animated slideOutLeft').addClass('animated slideInLeft');
            $('.black-bg').toggle();
        })
        $('.black-bg').click(function () {
            $('.menu').fadeOut().removeClass('animated slideInLeft').addClass('animated slideOutLeft');
            $('.i-call2, .i-call form').fadeOut().removeClass('animated bounceIn').addClass('animated bounceOut');
        })


    }else{
        $(".menu-item").click(function () {
            var href = $(this).find("a").attr("href");
            window.open(href, '_self');
        });
        $('.i-call2 button').click(function (e) {
            e.preventDefault();
            $('.form-text').fadeOut().promise().done(function () {
                $('.result-b').fadeIn()
            })
        });
        $('.i-call button').click(function (e) {
            e.preventDefault();
            $('.form-text2').fadeOut().promise().done(function () {
                $('.result2').fadeIn()
            })
        });

        $( ".articles-id a" ).click(function(e) {
                var id = $(this).data('id');
                e.preventDefault();
                $( ".doc-menu-con a" ).removeClass('active');
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
                $(".news-center-box").fadeOut().promise().done(function () {
                    $('#articles-' + id).fadeIn().css('display', 'flex');
                })
            }
        );
        $( ".forum-theme a" ).click(function(e) {
                var id = $(this).data('id');
                e.preventDefault();
                $( ".doc-menu-con a" ).removeClass('active');
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
                $(".forum-container").fadeOut().promise().done(function () {
                    $('#forum-' + id).fadeIn();
                })
            }
        );
        //click doc menu category
        /*$( ".doc-menu-con a" ).click(function(e) {
                $('.doc-open').fadeOut(0);
                $('.doc-open-full').fadeOut(0);
                var id = $(this).data('id');
                e.preventDefault();
                $( ".doc-menu-con a" ).removeClass('active');
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
                $(".doc-right-content").fadeOut(0).promise().done(function () {
                    $('#doc-' + id).fadeIn().css('display', 'flex');
                })
            }
        );
*/

        //Финансы текст
        $( ".finance-id a" ).click(function(e) {
                var id = $(this).data('id');
                e.preventDefault();
                $( ".doc-menu-con a" ).removeClass('active');
                if(!$(this).hasClass('active')){
                    $(this).addClass('active')
                }
                /*$(".finance-right").fadeOut().promise().done(function () {
                    $('#finance-' + id).fadeIn();
                })*/
            }
        );
        //Финансы нижные блоки
        /*$( ".service-box-item" ).click(function() {
                $(".service-box-item").removeClass('active');
                var id = $(this).data('id');
                $(".doc").fadeOut(0).promise().done(function () {
                    $('#service-id-' + id).fadeIn();
                })
                $(this).addClass('active');
            }
        );*/
        var scrollPos3 = $('.about2').offset().top - 400;
        var once3 = false;
        $(window).scroll(function() {
            var scrolled = $(window).scrollTop();
            if ((scrolled > scrollPos3) && !once3) {
                once3 = true;
                $('.line-3').addClass('active');
                setTimeout(function () {$('.a1').fadeIn().addClass('animated fadeInUp');}, 1000);
                setTimeout(function () {$('.a2').fadeIn().addClass('animated fadeInDown');}, 1500);
                setTimeout(function () {$('.a3').fadeIn().addClass('animated fadeInUp');}, 2000);
                setTimeout(function () {$('.a4').fadeIn().addClass('animated fadeInDown');}, 2500);
                setTimeout(function () {$('.a5').fadeIn().addClass('animated fadeInUp');}, 3000);
                setTimeout(function () {$('.a6').fadeIn().addClass('animated fadeInDown');}, 3500);
                setTimeout(function () {$('.a7').fadeIn().addClass('animated fadeInUp');}, 4000);
            }
        });
        var scrollPos4 = $('.preim-title').offset().top - 400;
        var once4 = false;
        $(window).scroll(function() {
            var scrolled = $(window).scrollTop();
            if ((scrolled > scrollPos4) && !once4) {
                once4 = true;
                $('.preim-border3').addClass('active');
                setTimeout(function () {$('.preim-border2').addClass('active');}, 700);
                setTimeout(function () {$('.arr').fadeIn().addClass('animated slideInLeft');}, 3000);
                setTimeout(function () {$('.p1').css('visibility', 'visible').addClass('animated flipInY');}, 4000);
                setTimeout(function () {$('.p2').css('visibility', 'visible').addClass('animated flipInY');}, 5000);
                setTimeout(function () {$('.p3').css('visibility', 'visible').addClass('animated flipInY');}, 6000);
                setTimeout(function () {$('.p4').css('visibility', 'visible').addClass('animated flipInY');}, 7000);
            }
        });
        setTimeout(function () {
            $('.animate1').addClass('height');
        }, 1000);
        setTimeout(function () {
            $('.animate2').addClass('height');
        }, 2000);

        var scrollPos5 = $('.header-bottom-right.i-call').offset().top - 600;
        var once5 = false;
        $(window).scroll(function() {
            var scrolled = $(window).scrollTop();
            if ((scrolled > scrollPos5) && !once5) {
                once5 = true;
                setTimeout(function () { $('.animate4').addClass('height');}, 500);
                setTimeout(function () { $('.animate5').addClass('height');}, 1500);
            }
        });

        var scrollPos6 = $('.animate5').offset().top - 300;
        var once6 = false;
        $(window).scroll(function() {
            var scrolled = $(window).scrollTop();
            if ((scrolled > scrollPos6) && !once6) {
                once6 = true;
                setTimeout(function () { $('.animate6').addClass('height');}, 500);
                setTimeout(function () { $('.animate7').addClass('height animated jello');}, 1500);
            }
        });
    }
});
jQuery(document).ready(function(e) {
setTimeout(function (){
    function s() {
        a(e(".animated-headline.letters").find("b")), n(e(".animated-headline"))
    }

    function a(s) {
        s.each(function() {
            var s = e(this),
                a = s.text().split(""),
                n = s.hasClass("is-visible");
            for (i in a) s.parents(".scale").length > 0 && (a[i] = " " == a[i] ? '<em class="word-spacer">' + a[i] + "</em>" : "<em>" + a[i] + "</em>"), a[i] = n ? '<i class="in">' + a[i] + "</i>" : "<i>" + a[i] + "</i>";
            var t = a.join("");
            s.html(t).css("opacity", 1)
        })
    }

    function n(i) {
        var s = h;
        i.each(function() {
            var i = e(this);
            if (i.hasClass("loading-bar")) s = m, setTimeout(function() {
                i.find(".animated-words-wrapper").addClass("is-loading")
            }, u);
            else if (i.hasClass("clip")) {
                var a = i.find(".animated-words-wrapper"),
                    n = a.width() + 10;
                a.css("width", n)
            } else if (!i.hasClass("type")) {
                var d = i.find(".animated-words-wrapper b"),
                    l = 0;
                d.each(function() {
                    var i = e(this).width();
                    i > l && (l = i)
                }), i.find(".animated-words-wrapper").css("width", l)
            }
            setTimeout(function() {
                t(i.find(".is-visible").eq(0))
            }, s)
        })
    }

    function t(i) {
        var e = o(i);
        if (i.parents(".animated-headline").hasClass("type")) {
            var s = i.parent(".animated-words-wrapper");
            s.addClass("selected").removeClass("waiting"), setTimeout(function() {
                s.removeClass("selected"), i.removeClass("is-visible").addClass("is-hidden").children("i").removeClass("in").addClass("out")
            }, C), setTimeout(function() {
                d(e, f)
            }, w)
        } else if (i.parents(".animated-headline").hasClass("letters")) {
            var a = i.children("i").length >= e.children("i").length ? !0 : !1;
            l(i.find("i").eq(0), i, a, p), r(e.find("i").eq(0), e, a, p)
        } else i.parents(".animated-headline").hasClass("clip") ? i.parents(".animated-words-wrapper").animate({
            width: "2px"
        }, v, function() {
            c(i, e), d(e)
        }) : i.parents(".animated-headline").hasClass("loading-bar") ? (i.parents(".animated-words-wrapper").removeClass("is-loading"), c(i, e), setTimeout(function() {
            t(e)
        }, m), setTimeout(function() {
            i.parents(".animated-words-wrapper").addClass("is-loading")
        }, u)) : (c(i, e), setTimeout(function() {
            t(e)
        }, h))
    }

    function d(i, e) {
        i.parents(".animated-headline").hasClass("type") ? (r(i.find("i").eq(0), i, !1, e), i.addClass("is-visible").removeClass("is-hidden")) : i.parents(".animated-headline").hasClass("clip") && i.parents(".animated-words-wrapper").animate({
            width: i.width() + 10
        }, v, function() {
            setTimeout(function() {
                t(i)
            }, T)
        })
    }

    function l(i, s, a, n) {
        if (i.removeClass("in").addClass("out"), i.is(":last-child") ? a && setTimeout(function() {
                t(o(s))
            }, h) : setTimeout(function() {
                l(i.next(), s, a, n)
            }, n), i.is(":last-child") && e("html").hasClass("no-csstransitions")) {
            var d = o(s);
            c(s, d)
        }
    }

    function r(i, e, s, a) {
        i.addClass("in").removeClass("out"), i.is(":last-child") ? (e.parents(".animated-headline").hasClass("type") && setTimeout(function() {
            e.parents(".animated-words-wrapper").addClass("waiting")
        }, 200), s || setTimeout(function() {
            t(e)
        }, h)) : setTimeout(function() {
            r(i.next(), e, s, a)
        }, a)
    }

    function o(i) {
        return i.is(":last-child") ? i.parent().children().eq(0) : i.next()
    }

    function c(i, e) {
        i.removeClass("is-visible").addClass("is-hidden"), e.removeClass("is-hidden").addClass("is-visible")
    }
    var h = 6500,
        m = 3800,
        u = m - 3e3,
        p = 50,
        f = 150,
        C = 500,
        w = C + 800,
        v = 600,
        T = 1500;
    s()
},2000);
})

