<head>
    <a href="#call-modal" id="popup__toggle">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;"></div></div>
    </a>
    <div id="call-modal">
        <div class="close"></div>
            <div class="bottom-right-form">
            <div class="result3">
                <p class="bold">Спасибо, Ваша заявка принята!</p>
                <p>Ожидайте звонка</p>
            </div>
            <form action="" method="" class="form">
                <input type="text" id="name" name="name" placeholder="Имя">
                <input type="text" id="phone" name="phone" class="phone_number" placeholder="Телефон">
                <button type="submit"> Заказать звонок</button>
            </form>
        </div>
    </div>
<div class="black-bg"></div>
<div class="header">
    <div class="header-middle">
        <div class="header-top">
            <div class="header-top-item">
                <div class="logo">
                    <a href="/"><img src="/media/img/logo.png"></a>
                </div>
                    <div class="header-right flex">
                    <div class="phone">
                        <a href="tel: +7 (727) 327-72-04"><img src="/media/img/i-call.png" class="mobile-visible"><b>+7 (727) 327-72-04</b></a>
                        <a href="#" class="mobile-none"><b>+7 (701) 222-42-14</b></a>
                    </div>
                    <div class="social-icons">
                        <?foreach ( $social as $key=>$value) { ?>
                            <?$img = json_decode( $value->image, true);?>
                            <a href="<?=$value->url?>"><img src="/upload/Social/full/<?=$img[0]?>"></a>
                        <? } ?>
                    </div>
                    <div class="search">
                        <form action="" method="">
                            <input type="text" name="search" placeholder="Поиск">
                            <button type="submit"><img src="/media/img/search.png"></button>
                        </form>
                    </div>
                    <div class="mobile-visible m-flex2">
                        <img src="/media/img/m-search.png" class="m-search-button">
                        <img src="/media/img/share.png" class="m-share-button">
                    </div>                    
                </div>
            </div>
			<?php $lang = $_GET['lang'];?>
            <div class="languages">
                <ul class="languagepicker roundborders large">
                    <? if( $lang == "rus" || !isset($lang) ) { ?>
                        <a href="#"><li><img src="/media/img/flags/rsz_flag-russian.png">Russian</li></a>
                        <a href="?lang=en"><li><img src="http://i64.tinypic.com/fd60km.png"/>English</li></a>
                        <a href="?lang=kor"><li><img src="/media/img/flags/rsz_flag-korean.png"/>Korean</li></a>
                    <? }elseif ($lang == "en"){ ?>
                        <a href="#"><li><img src="http://i64.tinypic.com/fd60km.png"/>English</li></a>
                        <a href="?lang=kor"><li><img src="/media/img/flags/rsz_flag-korean.png"/>Korean</li></a>
                        <a href="?lang=rus"><li><img src="/media/img/flags/rsz_flag-russian.png">Russian</li></a>
                    <? }elseif ($lang == "kor"){?>
                        <a href="#"><li><img src="/media/img/flags/rsz_flag-korean.png"/>Korean</li></a>
                        <a href="?lang=en"><li><img src="http://i64.tinypic.com/fd60km.png"/>English</li></a>
                        <a href="?lang=rus"><li><img src="/media/img/flags/rsz_flag-russian.png">Russian</li></a>
                    <? } ?>
                </ul>
            </div>
        </div>
        <div class="menu flex">
            <div class="menu-item mobile-visible">
                <div class="menu-hover"></div>
                <a href="/">Главная</a>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="/about">О компании</a>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="#" id="not">Услуги</a>
                <div class="dropdown">
                    <div class="dropdown-con">
                        <ul>
                            <? foreach ( $financecategory as $key=>$value) { ?>
                                <a href="/finance/<?=$value->url_text?>"><li><?=$value->name_text?></li></a>
                            <? } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="/docs?">Документы</a>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="/laws?ch=1&st=&dt=&sph=">Законы и кодексы</a>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="/articles">Статьи</a>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="/news">Новости</a>
            </div>
            <div class="menu-item">
                <div class="menu-hover"></div>
                <a href="/forum">Форум</a>
            </div>
        </div>
    </div>
</div>
</head>