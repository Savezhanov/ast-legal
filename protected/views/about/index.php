<?/*=$page[0]->description*/?>

<div class="about shadow">
    <div class="about-box flex">
        <div class="box-text">
            <span class="title">О нас</span>
            <p class="small-margin"><i>Консалтинговая компания AST-legal – это правовой щит для граждан и бизнеса. </i></p>
            <p class="small-margin"><i>Мы работаем ради улучшения отношений между людьми и государством, предлагаем юридические услуги в любой области права, помогаем разобраться в законах и причинах возникновения проблем. Мы любим сложные дела, но беремся и за простые. </i></p>
            <div class="box-border">
                <div class="border-top"></div>
                <div class="border-bottom"></div>
                <div class="box-border-text">
                    <p>Цель и приоритеты</p>
                    <span>Наша цель – создать общество, в котором каждый знает свои права, умеет доказать и донести личную точку зрения. Мы предлагаем свою защиту каждому и нацелены на максимально положительный результат.</span>
                </div>
            </div>
            <div class="dalee">Далее...</div>
            <div class="dalee-text">
                <p class="small-margin"><i>Консалтинговая группа AST-legal – это правовой щит для граждан и бизнеса. </i></p>
                <p class="small-margin"><i>Мы работаем ради улучшения отношений между людьми и государством, предлагаем юридические услуги в любой области права, помогаем разобраться в законах и причинах возникновения проблем. Мы любим сложные дела, но беремся и за простые. </i></p>
            </div>
        </div>
        <div class="box-form">
            <div class="mobile-help2">
                <div class="call">
                    <img src="/media/img/line4.png" class="line3 animate6">
                    <img src="/media/img/phone.png" class="phone2 animate7">
                </div>
                <div class="bottom-call">
                    <p class="upper2 mobile-none">Наш опыт позволяет вести </p>
                    <p class="margin mobile-none">продуктивный диалог с законом, государством и бизнесом. </p>
                    <span class="line-ht"><i>Доверяйте профессионалам – звоните по телефону </i></span>
                    <div class="phone-box">
                        <a href="tel: +7 (727) 327 72 04">
                            <div class="mobile-help">
                                <img src="/media/img/phone.png" class="mobile-visible"><span>+7 (727) 327 72 04</span>
                            </div>
                        </a>
                    </div>
                    <p>и мы поможем!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="about-two shadow">
    <div class="animate">
        <img src="/media/img/line.png" class="line">
    </div>
    <div class="animate2">
        <img src="/media/img/line-5.png" class="line5">
    </div>
    <div class="about-box flex">
        <img src="/media/img/about3.png" class="about-img mobile-none">
        <div class="mobile-visible m-flex">
            <img src="/media/img/ab-2.png" class="ab-img2">
        </div>
        <div class="ab-text-1">
            <p class="blue">Управляющий партнер</p>
            <p class="name">Тулегенов Мурат</p>
        </div>
        <div class="center">
            <span class="white">Мы </span><span>боремся <br>за права</span>
        </div>
        <div class="center z-in">
            <p class="bg">граждан и бизнеса!</p>
        </div>
    </div>
</div>-->
<div class="slider">
    <p class="preim-title no mobile-none">Рекомендательные</p><br>
    <p class="preim-title no2 mobile-none">письма</p>
    <p class="preim-title mobile-visible inline">Рекомендательные письма</p>
    <div class="slider-box">
        <div class="slider-item">
            <a data-fancybox="gallery" href="/media/img/slider/1.jpg">
                <img src="/media/img/slider/1.jpg">
            </a>
        </div>
        <div class="slider-item">
            <a data-fancybox="gallery" href="/media/img/slider/2.jpg">
                <img src="/media/img/slider/2.jpg">
            </a>
        </div>
        <div class="slider-item">
            <a data-fancybox="gallery" href="/media/img/slider/3.jpg">
                <img src="/media/img/slider/3.jpg">
            </a>
        </div>

        <!--<div class="slider-item">
            <a data-fancybox="gallery" href="/media/img/slider/1.jpg">
                <img src="/media/img/slider/1.jpg">
            </a>
        </div>
        <div class="slider-item">
            <a data-fancybox="gallery" href="/media/img/slider/2.jpg">
                <img src="/media/img/slider/2.jpg">
            </a>
        </div>
        <div class="slider-item">
            <a data-fancybox="gallery" href="/media/img/slider/3.jpg">
                <img src="/media/img/slider/3.jpg">
            </a>
        </div>-->
    </div>
</div>

<script type="text/javascript" src="/media/js/owl-slider.js"></script>

<script> // from about
    if ($(window).width() > 950) {
        $(document).ready(function () {
            setTimeout(function () { $('.animate6').addClass('height');}, 3000);
            setTimeout(function () { $('.animate7').addClass('height animated jello');}, 4000);
            var scrollPos2 = $('.about-two').offset().top - 200;
            var once2 = false;
            $(window).scroll(function() {
                var scrolled = $(window).scrollTop();
                if ((scrolled > scrollPos2) && !once2) {
                    once2 = true;
                    $('.animate').addClass('active');
                    setTimeout(function () {
                        $('.animate2').addClass('active');
                    }, 500);
                    setTimeout(function () {
                        $('.ab-text-1').fadeIn().addClass('animated fadeInRight');
                    }, 100);
                    setTimeout(function () {
                        $('.ab-text-2').fadeIn().addClass('animated fadeInRight');
                    }, 300);
                }
            });});
    }
</script>
